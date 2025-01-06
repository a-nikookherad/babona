<?php

namespace Package\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;

//use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\ServiceProvider;
use Package\Entities\Models\Package;
use Package\Entities\Observers\PackageObserver;

class PackageRelationshipsServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        //define service observations
        Package::observe(PackageObserver::class);

        Relation::enforceMorphMap([
            'package' => Package::class,
        ]);
    }

}
