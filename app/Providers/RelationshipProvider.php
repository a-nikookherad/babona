<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\Relation;

//use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\ServiceProvider;

class RelationshipProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        //define service observations
//        Category::observe(CategoryObserver::class);
//        Product::observe(ProductObserver::class);

        Relation::enforceMorphMap([
            'product' => Product::class,
            'category' => Category::class,
//            'return_product' => ReturnProduct::class,
        ]);
    }

}
