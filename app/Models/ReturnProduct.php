<?php

namespace App\Models;

use Attachment\Entities\Models\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Imanghafoori\Tags\Traits\hasTempTags;

class ReturnProduct extends Model
{
    use SoftDeletes, hasTempTags;

    protected $table = "return_products";
    protected $fillable = [
        "reason",
        "description",
        "basket_id",
        "request_at",
        "return_at",
    ];

    public function attachments(): MorphMany
    {
        return $this->morphMany(File::class, "attachable")
            ->orderBy("name");
    }

    public function basket(): BelongsTo
    {
        return $this->belongsTo(Basket::class, "basket_id");
    }
}
