<?php

namespace Production;

use Illuminate\Support\Facades\Facade;

/**
 * @method static ProductionService credit($object)
 */
class Production extends Facade
{
    public static function getFacadeAccessor()
    {
        return ProductionService::class;
    }
}
