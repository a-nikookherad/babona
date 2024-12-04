<?php

namespace Finance;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Facade;

class Finance extends Facade
{
    public static function getFacadeAccessor()
    {
        return App::make(FinanceService::class);
    }
}
