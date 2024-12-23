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
use Production\Entities\Observers\ProductObserver;

class Product extends Model
{
    use SoftDeletes;

    /*    protected $dispatchesEvents = [
            "deleting" => ProductObserver::class
        ];*/

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
        return $this->morphMany(File::class, "attachable")
            ->orderBy("name");
    }

    public function thumbnail(): MorphOne
    {
        return $this->morphOne(File::class, "attachable")
            ->where("title", "thumbnail");
    }

    public function productDetails(): HasMany
    {
        return $this->hasMany(ProductDetail::class, "product_id");
    }
}
