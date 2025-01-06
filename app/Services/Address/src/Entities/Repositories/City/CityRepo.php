<?php

namespace App\Services\Address\src\Entities\Repositories\City;

use Address\Entities\Models\City;

class CityRepo
{
    public static function getByStateId($state_id)
    {
        return City::query()
            ->whereHas("state", function ($query) use ($state_id) {
                return $query->where("id", $state_id);
            })
            ->get();
    }

    public static function getById($city_id)
    {
        return City::query()
            ->where("id", $city_id)
            ->first();
    }
}
