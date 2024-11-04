<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Product extends Model
{

    protected $fillable = [
        "slug",
        "name",
        "description",
        "body",
        "jsonld",
        "category_id",
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, "category_id");
    }

    public function prices(): HasMany
    {
        return $this->hasMany(Product::class, "product_id");
    }

    public function attachments(): MorphMany
    {
        return $this->morphMany(Attachment::class, "attachable");
    }

    public function storehouses(): BelongsToMany
    {
        return $this->belongsToMany(Storehouse::class, "storehouse_products", "product_id", "storehouse_id");
    }

    public function comments(): MorphOne
    {
        return $this->morphOne(Comment::class, "commentable");
    }
}
