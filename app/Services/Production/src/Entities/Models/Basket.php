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

    public function prices(): BelongsToMany
    {
        return $this->belongsToMany(Price::class, "basket_prices", "basket_id", "price_id");
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
