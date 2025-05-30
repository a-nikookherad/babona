<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Database\Factories\MerchantFactory;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Merchant extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "fa_name",
        "brand",
    ];

    public static function newFactory()
    {
        return MerchantFactory::new();
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "user_merchant", "merchant_id", "user_id")
            ->withPivot('role')
            ->withTimestamps();
    }

    public function image(): MorphOne
    {
        return $this->morphOne(File::class, "attachable");
    }
}
