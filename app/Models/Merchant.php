<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Database\Factories\MerchantFactory;

class Merchant extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "brand",
        "description",
        "static_costs",
    ];

    public static function newFactory()
    {
        return MerchantFactory::new();
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "user_merchants", "merchant_id", "user_id");
    }
}
