<?php

namespace Address\Entities\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
//    use HasFactory;

    protected $fillable = [
        "name",
        "fa_name",
        "state_id",
    ];

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class, "state_id");
    }
}