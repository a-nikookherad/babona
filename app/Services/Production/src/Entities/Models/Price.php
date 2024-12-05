<?php

namespace Production\Entities\Models;

use App\Models\Campaign;
use Cashier\Entities\Models\Order;
use Finance\Entities\Models\Wallet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Price extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "color",
        "price",
        "wallet_id",
        "product_id",
    ];

    public function storehouse(): BelongsTo
    {
        return $this->belongsTo(Storehouse::class, "storehouse_id");
    }

    public function wallet(): BelongsTo
    {
        return $this->belongsTo(Wallet::class, "wallet_id");
    }

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, "order_prices", "price_id", "order_id");
    }

    public function campaigns(): BelongsToMany
    {
        return $this->belongsToMany(Campaign::class, "campaign_prices", "price_id", "order_id");
    }

    public function baskets(): BelongsToMany
    {
        return $this->belongsToMany(Basket::class, "basket_prices", "price_id", "basket_id");
    }

}
