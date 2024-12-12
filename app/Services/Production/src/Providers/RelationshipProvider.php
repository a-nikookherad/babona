<?php

namespace Production\Providers;

use App\Models\Merchant;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Production\Entities\Models\Basket;
use Production\Entities\Models\Category;
use Production\Entities\Models\Product;
use Production\Entities\Models\Storehouse;

class RelationshipProvider extends ServiceProvider
{
    public function register()
    {
        //define service relationships
        User::resolveRelationUsing("basket", function ($user) {
            return $user->hasOne(Basket::class, "user_id");
        });
        Merchant::resolveRelationUsing("storehouses", function ($merchant) {
            return $merchant->hasMany(Storehouse::class, "merchant_id");;
        });
    }

    public function boot()
    {
        Relation::enforceMorphMap([
            'product' => Product::class,
            'category' => Category::class,
        ]);
    }

}
