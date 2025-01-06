<?php

namespace Cashier\Entities\Models;

use Finance\Entities\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Loyalty\Entities\Models\Campaign;
use Production\Entities\Models\ProductDetail;

class Order extends Model
{
    protected $fillable = [
        "delivered_at",
        "paid_at",
        "description",
        "paid_by_admin_user_id",
        "delivery_id",
        "basket_id",
        "user_id",
    ];

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class, "payment_id");
    }

    public function invoices(): BelongsToMany
    {
        return $this->belongsToMany(ProductDetail::class, "invoices", "order_id", "product_detail_id");
    }

    /*public function campaigns(): BelongsToMany
    {
        return $this->belongsToMany(Campaign::class, "order_campaigns", "order_id", "campaign_id");
    }

        public function shipments(): HasMany
        {
            return $this->hasMany(Shipment::class, "order_id");
        }*/
}
