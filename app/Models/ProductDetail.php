<?php

namespace App\Models;

use Database\Factories\ProductDetailFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDetail extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        "size",
        "color",
        "price",
        "tax",
        "discount",
//        "discount_percentage",
        "discount_expired_at",
        "quantity_add_from_prev",
        "quantity",
        "quantity_remain_before_deleting",
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

    public static function newFactory()
    {
        return ProductDetailFactory::new();
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, "product_id");
    }

    public function inventories(): BelongsTo
    {
        return $this->hasMany(Inventory::class, "product_detail_id");
    }

    public function baskets(): BelongsToMany
    {
        return $this->belongsToMany(Basket::class, "basket_product_details", "product_detail_id", "basket_id");
    }

    public function paidBaskets(): BelongsToMany
    {
        return $this->baskets()
            ->whereNotNull("baskets.bought_at");
    }

    public function hasPaidBaskets()
    {
        return $this->paidBaskets()
            ->exists();
    }

    public function soldCount()
    {
        return $this->baskets()
            ->whereNotNull("baskets.bought_at")
            ->withPivot(["quantity"]);
    }
}
