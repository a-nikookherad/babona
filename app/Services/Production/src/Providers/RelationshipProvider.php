<?php

namespace Production\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;

//use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\ServiceProvider;
use Production\Entities\Models\Category;
use Production\Entities\Models\Product;
use Production\Entities\Models\ReturnProduct;
use Production\Entities\Observers\CategoryObserver;
use Production\Entities\Observers\ProductObserver;

class RelationshipProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        //define service observations
        Category::observe(CategoryObserver::class);
        Product::observe(ProductObserver::class);

        Relation::enforceMorphMap([
            'product' => Product::class,
            'category' => Category::class,
            'return_product' => ReturnProduct::class,
        ]);
    }

}
