<?php

namespace Production\Entities\Models;

use App\Models\Tag;
use Attachment\Entities\Models\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "slug",
        "name",
        "fa_name",
        "status",
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

    public function thumbnail(): MorphOne
    {
        return $this->morphOne(File::class, "attachable")
            ->where("title", "thumbnail");
    }

    public function tags(): MorphMany
    {
        return $this->morphMany(Tag::class, "taggable");
    }
}
