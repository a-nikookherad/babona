<?php

namespace Shipping\Entities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Shipping extends Model
{
    protected $fillable = [

    ];

    public function attachable(): MorphTo
    {
        return $this->morphTo();
    }

}
