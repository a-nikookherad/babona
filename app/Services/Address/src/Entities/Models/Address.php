<?php

namespace Address\Entities\Models;

use Address\Database\Factories\AddressFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        "addressable_type",
        "addressable_id",
        "type",
        "is_active",
        "longitude",
        "latitude",
        "address",
        "place",
        "postal_code",
        "phone_number",
        "city_id",
        "state_id",
    ];

    public static function newFactory()
    {
        return AddressFactory::new();
    }

    public function addressable(): MorphTo
    {
        return $this->morphTo();
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class, "state_id");
    }

    public function cities(): BelongsTo
    {
        return $this->belongsTo(City::class, "city_id");
    }
}
