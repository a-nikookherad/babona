<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Product extends Model
{
    public function attachments(): MorphMany
    {
        return $this->morphMany(Attachment::class, "attachable");
    }
}
