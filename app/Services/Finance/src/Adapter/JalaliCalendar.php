<?php

namespace App\Services\Finance\src\Adapter;

use Morilog\Jalali\Jalalian;

class JalaliCalendar
{

    public static function startOfYear()
    {
        return Jalalian::now()->getFirstDayOfYear()->toCarbon()->format("Y-m-d H:i:s");
    }

    public static function endOfYear()
    {
        return Jalalian::now()->getEndDayOfYear()->toCarbon()->format("Y-m-d H:i:s");
    }
}
