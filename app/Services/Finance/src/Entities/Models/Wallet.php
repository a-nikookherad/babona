<?php

namespace Finance\Entities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wallet extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "instrument",
        "name",
        "fa_name",
        "transaction_accept_manual",
        "club_id",
    ];

    public function allAccounts(): HasMany
    {
        return $this->hasMany(Account::class, "wallet_id");
    }

    public function treasuryAccount(): MorphOne
    {
        return $this->morphOne(Account::class, "accountable");
    }

    public function accounts(): MorphMany
    {
        return $this->morphMany(Account::class, "accountable");
    }
}
