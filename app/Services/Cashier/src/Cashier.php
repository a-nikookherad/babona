<?php

namespace Cashier;

use Illuminate\Support\Facades\Facade;

/**
 * @method static CashierService setBasket($basket)
 * @method static CashierService createInvoice()
 */
class Cashier extends Facade
{
    public static function getFacadeAccessor()
    {
        return CashierService::class;
    }
}
