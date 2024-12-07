<?php

namespace Production\Entities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Storehouse extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "product_id",
        "color",
        "size",
        "quantity",
        "is_active",
        "add_by_id",
    ];

    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class, "product_id");
    }

    public function prices(): HasMany
    {
        return $this->hasMany(Price::class, "storehouse_id");
    }
}
