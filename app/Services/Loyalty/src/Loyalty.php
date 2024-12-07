<?php

namespace Loyalty;

use Illuminate\Support\Facades\Facade;

/**
 * @method static LoyaltyService credit($object)
 */
class Loyalty extends Facade
{
    public static function getFacadeAccessor()
    {
        return LoyaltyService::class;
    }
}
