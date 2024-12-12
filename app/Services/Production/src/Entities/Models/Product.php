<?php

namespace Production\Entities\Models;

use App\Models\Attachment;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = [
        "slug",
        "name",
        "fa_name",
        "material",
        "style",
        "status",
        "code",
        "barcode",
        "brief",
        "description",
        "jsonld",
        "user_id",
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

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, "product_id");
    }

    public function tags(): MorphMany
    {
        return $this->morphMany(Tag::class, "taggable");
    }
}
