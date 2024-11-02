<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Category extends Model
{
    public function attachments():MorphMany
    {
        return $this->morphMany(Attachment::class,"attachable");
    }
}
