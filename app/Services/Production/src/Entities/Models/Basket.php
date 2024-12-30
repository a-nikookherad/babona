<?php

namespace Production\Entities\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Production\Database\Factories\BasketFactory;

class Basket extends Model
{
    use SoftDeletes,HasFactory;

    protected $fillable = [
        "user_id",
        "bought_at"
    ];

    protected static function newFactory()
    {
        return BasketFactory::new();
    }

    public function productDetails(): BelongsToMany
    {
        return $this->belongsToMany(ProductDetail::class, "basket_product_details", "basket_id", "product_detail_id");
    }
}
