<?php

namespace Cashier\Entities\Models;

use App\Models\Campaign;
use App\Models\Shipment;
use Finance\Entities\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Production\Entities\Models\Price;

class Order extends Model
{
    protected $fillable = [
        "user_id",
        "payment_id",
        "type",
        "paid_at",
    ];

    public function transactions(): MorphMany
    {
        return $this->morphMany(Transaction::class, "payable");
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class, "payment_id");
    }

    public function prices(): BelongsToMany
    {
        return $this->belongsToMany(Price::class, "order_prices", "order_id", "price_id");
    }

    public function shipments(): HasMany
    {
        return $this->hasMany(Shipment::class, "order_id");
    }

    public function campaigns(): BelongsToMany
    {
        return $this->belongsToMany(Campaign::class, "order_campaigns", "order_id", "campaign_id");
    }
}
