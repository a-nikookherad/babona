<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wallet extends Model
{
    protected $fillable = [
        "instrument",
        "name",
        "club_id",
    ];

    public function accounts(): HasMany
    {
        return $this->hasMany(Account::class, "wallet_id");
    }
}
