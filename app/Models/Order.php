<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        "user_id",
        "payment_id",
        "type",
        "paid_at",
    ];

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class, "payment_id");
    }

    public function prices(): BelongsToMany
    {
        return $this->belongsToMany(Price::class, "", "order_id", "price_id");
    }

    public function storehouses(): BelongsToMany
    {
        return $this->belongsToMany(Storehouse::class, "", "order_id", "storehouse_id");
    }

    public function shipments(): HasMany
    {
        return $this->hasMany(Shipment::class,"order_id");
    }
}
