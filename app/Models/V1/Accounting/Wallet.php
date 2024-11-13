<?php

namespace App\Models\V1\Accounting;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Wallet extends Model
{
    protected $fillable = [
        "instrument",
        "name",
        "fa_name",
        "transaction_accept_manual",
        "club_id",
    ];

    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class, "wallet_id");
    }

    public function treasuryAccount(): MorphOne
    {
        return $this->morphOne(Account::class, "accountable");
    }
}
