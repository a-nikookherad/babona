<?php

namespace App\Models;

use Cashier\Entities\Models\Order;
use Finance\Entities\Models\Account;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Production\Entities\Models\Price;

class Campaign extends Model
{
    public function accounts(): MorphMany
    {
        return $this->morphMany(Account::class, "accountable");
    }

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, "order_campaigns", "campaign_id", "order_id");
    }

    public function prices(): BelongsToMany
    {
        return $this->belongsToMany(Price::class, "campaign_prices", "campaign_id", "price_id");
    }

    public function tiers(): BelongsToMany
    {
        return $this->belongsToMany(Tier::class, "campaign_tiers", "campaign_id", "tier_id");
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "campaign_users", "campaign_id", "user_id");
    }
}
