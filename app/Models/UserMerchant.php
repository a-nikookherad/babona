<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserMerchant extends Pivot
{
    protected $fillable = [
        "role",
        "user_id",
        "merchant_id",
    ];
}
