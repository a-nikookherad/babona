<?php

namespace App\Models;

use App\Services\Production\src\Entities\Models\Storehouse;
use Finance\Entities\Models\Account;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Merchant extends Model
{
    protected $fillable = [
        "name",
        "description",
    ];


    public function accounts(): MorphMany
    {
        return $this->morphMany(Account::class, "accountable");
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "user_merchants", "merchant_id", "user_id");
    }

    public function storehouses(): HasMany
    {
        return $this->hasMany(Storehouse::class, "merchant_id");
    }
}
