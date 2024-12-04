<?php

namespace Finance\Entities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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

    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class, "wallet_id");
    }

    public function treasuryAccount(): MorphOne
    {
        return $this->morphOne(Account::class, "accountable");
    }

    /**
     * this is the treasury's account
     * @return MorphOne
     */
    public function account(): MorphOne
    {
        return $this->morphOne(Account::class, "accountable");
    }
}
