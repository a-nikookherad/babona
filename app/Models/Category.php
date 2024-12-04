<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Category extends Model
{
    protected $fillable = [
        "slug",
        "name",
        "parent_id",
        "description",
        "jsonld",
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, "parent_id");
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, "category_id");
    }

    public function attachments(): MorphMany
    {
        return $this->morphMany(Attachment::class, "attachable");
    }
}
