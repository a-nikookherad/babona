<?php

namespace Production\Entities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "size",
        "color",
        "price",
        "discount",
        "discount_expired_at",
        "quantity",
        "status",
        "add_by_user_id",
        "net_price",
        "add_by_user_id",
        "product_id",
        "merchant_id",
    ];
    protected $hidden = [
        "net_price"
    ];

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class, "product_id");
    }

    public function baskets(): BelongsToMany
    {
        return $this->belongsToMany(Basket::class, "basket_product_details", "product_detail_id", "basket_id");
    }
}
