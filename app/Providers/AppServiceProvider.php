<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Relation::enforceMorphMap([
            'product' => 'App\Models\Product',
            'merchant' => 'App\Models\Merchant',
            'user' => 'App\Models\User',
        ]);

        Gate::define("super_admin", function (User $user) {
            return $user->role == "super_admin";
        });

        Gate::define("admin", function (User $user) {
            return $user->role == "admin" ||
                $user->role == "super_admin";
        });

        Gate::define("accountant", function (User $user) {
            return $user->role == "accountant" ||
                $user->role == "super_admin";
        });

        Gate::define("carrier", function (User $user) {
            return $user->role == "carrier" ||
                $user->role == "admin" ||
                $user->role == "super_admin";
        });

        Gate::define("admin_group", function (User $user) {
            return $user->role == "carrier" ||
                $user->role == "accountant" ||
                $user->role == "admin" ||
                $user->role == "super_admin";
        });

        Gate::define("customer", function (User $user) {
            return $user->role == "accountant" ||
                $user->role == "super_admin" ||
                $user->role == "admin" ||
                $user->role == "carrier" ||
                $user->role == "customer";
        });

        Paginator::useBootstrapFive();
    }
}
