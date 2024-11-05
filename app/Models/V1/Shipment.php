<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [
        "order_id",
        "status",
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, "order_id");
    }
}
