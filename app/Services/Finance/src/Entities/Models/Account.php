<?php

namespace Finance\Entities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
    ];

    public function wallet(): BelongsTo
    {
        return $this->belongsTo(Wallet::class, "wallet_id");
    }

    public function accountable(): MorphTo
    {
        return $this->morphTo();
    }

    public function balances(): HasMany
    {
        return $this->hasMany(Balance::class, "account_id");
    }
}
