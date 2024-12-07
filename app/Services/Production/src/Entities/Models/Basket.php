<?php

namespace Production\Entities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Basket extends Model
{

    protected $fillable = [
        "bought_at"
    ];

    public function prices(): BelongsToMany
    {
        return $this->belongsToMany(Price::class, "basket_prices", "basket_id", "price_id");
    }

}
