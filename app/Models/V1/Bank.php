<?php

namespace App\Models\V1;

use App\Models\V1\Accounting\Account;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Bank extends Model
{
    protected $fillable = [
        "name",
    ];

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class, "bank_id");
    }

    public function account(): MorphOne
    {
        return $this->morphOne(Account::class, "accountable");
    }
}
