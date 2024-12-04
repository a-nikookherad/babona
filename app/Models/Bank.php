<?php

namespace App\Models;

use Finance\Entities\Models\Account;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Bank extends Model
{
    protected $fillable = [
        "name",
    ];

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class, "bank_id");
    }

    public function accounts(): MorphMany
    {
        return $this->morphMany(Account::class, "accountable");
    }
}
