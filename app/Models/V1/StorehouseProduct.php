<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class StorehouseProduct extends Pivot
{
    protected $fillable = [
        "total_count",
        "total_price",
        "each_one_price",
        "exist_count",
        "color",
        "storehouse_id",
        "product_id",
    ];

}
