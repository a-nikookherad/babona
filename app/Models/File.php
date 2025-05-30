<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class File extends Model
{
    protected $fillable = [
        "attachable_type",
        "attachable_id",
        "title",
        "path",
        "name",
        "extension",
        "full_name",
        "alt",
        "mime_type",
        "size",
    ];

    public function attachable(): MorphTo
    {
        return $this->morphTo();
    }
}
