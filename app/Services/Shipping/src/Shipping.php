<?php

namespace Attachment;

use Illuminate\Support\Facades\Facade;
use Shipping\Contracts\ShippingServiceInterface;
use Shipping\ShippingService;

/**
 * @method ShippingService setProductDetails($productDetails)
 */
class Shipping extends Facade
{
    public static function getFacadeAccessor()
    {
        return ShippingServiceInterface::class;
    }
}
