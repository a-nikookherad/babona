<?php

namespace Production\Entities\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Basket extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "user_id",
        "bought_at"
    ];

    public function productDetails(): BelongsToMany
    {
        return $this->belongsToMany(ProductDetail::class, "basket_product_details", "basket_id", "product_detail_id");
    }
}
