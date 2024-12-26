<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Merchant extends Model
{
    protected $fillable = [
        "name",
        "brand",
        "description",
        "static_costs",
    ];


    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "user_merchants", "merchant_id", "user_id");
    }
}
