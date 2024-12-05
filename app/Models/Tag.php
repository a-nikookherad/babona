<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Tag extends Model
{
    public function taggable(): MorphMany
    {
        return $this->morphTo();
    }
}
