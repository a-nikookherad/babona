<?php

namespace Production\Entities\Models;

use App\Models\Attachment;
use App\Models\Comment;
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

    public function attachments(): MorphMany
    {
        return $this->morphMany(Attachment::class, "attachable");
    }

    public function storehouses(): HasMany
    {
        return $this->hasMany(Storehouse::class, "storehouse_id");
    }

    public function comments(): MorphOne
    {
        return $this->morphOne(Comment::class, "commentable");
    }
}
