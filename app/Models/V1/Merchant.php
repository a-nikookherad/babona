<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Merchant extends Model
{
    protected $fillable = [
        "name",
        "description",
    ];


    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "user_merchants", "merchant_id", "user_id");
    }

    public function storehouses():HasMany
    {
        return $this->hasMany(Storehouse::class,"merchant_id");
    }
}
