<?php

namespace Production\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Production\Entities\Models\Category;
use Production\Entities\Models\Product;
use Production\Entities\Models\Storehouse;

class RelationshipProvider extends ServiceProvider
{
    public function register()
    {
        //define service relationships

    }

    public function boot()
    {
        Relation::enforceMorphMap([
            'product' => Product::class,
            'category' => Category::class,
        ]);
    }

}
