<?php

namespace App\Models\V1;

use App\Models\V1\Accounting\Wallet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, "product_id");
    }

    public function wallet(): BelongsTo
    {
        return $this->belongsTo(Wallet::class, "wallet_id");
    }
}
