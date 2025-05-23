<?php

namespace App\Models;

use App\Services\Ordering\src\Entities\Models\Order;
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
