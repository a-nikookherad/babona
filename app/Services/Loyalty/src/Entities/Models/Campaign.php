<?php

namespace Loyalty\Entities\Models;

use App\Models\User;
use Cashier\Entities\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Production\Entities\Models\ProductDetail;

class Campaign extends Model
{
    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, "order_campaigns", "campaign_id", "order_id");
    }

    public function prices(): BelongsToMany
    {
        return $this->belongsToMany(ProductDetail::class, "campaign_prices", "campaign_id", "price_id");
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
