<?php

namespace Finance\Entities\Models;

use Finance\Adapter\JalaliCalendar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "accountable_type",
        "accountable_id",
        "type",
        "wallet_id",
        "is_active",
        "can_be_minus",
    ];

    protected $with = "balance";

    public function wallet(): BelongsTo
    {
        return $this->belongsTo(Wallet::class, "wallet_id");
    }

    public function accountable(): MorphTo
    {
        return $this->morphTo();
    }

    public function balance(): HasOne
    {
        return $this->hasOne(Balance::class, "account_id")
            ->where("expired_at", ">", JalaliCalendar::endOfYear())
            ->orWhereNull("expired_at");
    }
}
