<?php

namespace Address;

use Address\Entities\Repositories\Address\AddressRepo;
use App\Infrastructure\Repositories\City\CityRepo;
use App\Services\Address\src\Entities\Repositories\State\StateRepo;

class AddressService
{

    public function save($model, array $address)
    {
        $newAddress = AddressRepo::createNew($address);
        return $model->addresses()->save($newAddress);
    }

    public function getStatesWithCities()
    {
        return StateRepo::get("cities");
    }

    public function getStates()
    {
        return StateRepo::get();
    }

    public function getCitiesByStateId($state_id)
    {
        return CityRepo::getByStateId($state_id);
    }
}
