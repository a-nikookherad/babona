<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Storehouse extends Model
{
    protected $fillable = [
        "name",
        "is_empty",
        "merchant_id",
        "total_price",
    ];

    public function merchant(): BelongsTo
    {
        return $this->belongsTo(Merchant::class, "merchant_id");
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, "storehouse_products", "storehouse_id", "product_id");
    }
}
