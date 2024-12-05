<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tier extends Model
{
    protected $fillable = [
        "name",
        "fa_name",
        "description",
        "started_at",
        "expired_at",
    ];

    public function campaigns(): BelongsToMany
    {
        return $this->belongsToMany(Campaign::class, "campaign_tiers", "campaign_id", "tier_id");
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, "campaign_id");
    }
}
