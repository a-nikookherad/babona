<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Tag extends Model
{
    protected $fillable=[
      "name",
      "description",
      "keywords",
    ];

    public function taggable(): MorphTo
    {
        return $this->morphTo();
    }
}
