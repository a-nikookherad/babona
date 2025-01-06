<?php

namespace Package;

use Illuminate\Support\Facades\Facade;

/**
 * @method static PackageService package()
 */
class Package extends Facade
{
    public static function getFacadeAccessor()
    {
        return PackageService::class;
    }
}
