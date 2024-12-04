<?php

namespace Finance\Entities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Balance extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "credit",
        "started_at",
        "expired_at",
        "account_id",
    ];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class, "account_id");
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class, "balance_id");
    }
}
