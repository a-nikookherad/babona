<?php

namespace Cashier;

use Illuminate\Support\Facades\Facade;

/**
 * @method static CashierService credit($object)
 */
class Cashier extends Facade
{
    public static function getFacadeAccessor()
    {
        return CashierService::class;
    }
}
