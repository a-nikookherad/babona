<?php

namespace App\Services\Address\src\Entities\Repositories\State;

use Address\Entities\Models\State;
use Illuminate\Database\Eloquent\Builder;

class StateRepo
{
    public static function get($with = null)
    {
        return State::query()
            ->when(!empty($with), function (Builder $query) use ($with) {
                return $query->with([$with]);
            })
            ->get();
    }
}
