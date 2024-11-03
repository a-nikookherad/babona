<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserMerchant extends Pivot
{
    protected $fillable = [
        "role",
        "user_id",
        "merchant_id",
    ];
}
