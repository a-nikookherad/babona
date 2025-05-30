<?php

namespace App\Providers;

use App\Models\Product;
use App\Policies\ProductPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class ProductionProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        Gate::policy(Product::class, ProductPolicy::class);
    }
}

