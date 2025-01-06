<?php

namespace Address;

use Illuminate\Support\Facades\Facade;

/**
 * @method static AddressService save($model,array $address)
 *
 * @method static AddressService getStatesWithCities()
 * @method static AddressService getStates()
 * @method static AddressService getCitiesByStateId($state_id)
 */
class Address extends Facade
{
    public static function getFacadeAccessor()
    {
        return AddressService::class;
    }
}
