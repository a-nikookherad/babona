<?php

namespace Production\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Production\Views\admin\Components\category\CategoryCreateComponent;
use Production\Views\admin\Components\category\CategoryEditComponent;
use Production\Views\admin\Components\category\CategoryListComponent;
use Production\Views\admin\Components\category\CategoryViewComponent;
use Production\Views\admin\Components\product\ProductCreateComponent;
use Production\Views\admin\Components\product\ProductEditComponent;
use Production\Views\admin\Components\product\ProductListComponent;
use Production\Views\admin\Components\product\ProductViewComponent;

class ComponentsProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
//        Blade::componentNamespace('Production\\Views\\admin\\Components', 'production');

        $this->loadViewComponentsAs("Production", [
            CategoryListComponent::class,
            CategoryCreateComponent::class,
            CategoryEditComponent::class,
            CategoryViewComponent::class,

            ProductListComponent::class,
            ProductCreateComponent::class,
            ProductEditComponent::class,
            ProductViewComponent::class,
        ]);

    }
}

