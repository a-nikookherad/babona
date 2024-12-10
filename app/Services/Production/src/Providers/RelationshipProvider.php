<?php

namespace Production\Providers;

use App\Models\Merchant;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Production\Entities\Models\Basket;
use Production\Entities\Models\Storehouse;

class RelationshipProvider extends ServiceProvider
{
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Relation::enforceMorphMap([
            'product' => 'Production\Entities\Models\Product',
            'category' => 'Production\Entities\Models\Category',
        ]);

        //define service relationships
        User::resolveRelationUsing("basket", function ($user) {
            return $user->hasOne(Basket::class, "user_id");
        });
        Merchant::resolveRelationUsing("storehouses", function ($merchant) {
            return $merchant->hasMany(Storehouse::class, "merchant_id");;
        });
    }

}
