<?php

namespace App\Models;

use Finance\Entities\Models\Account;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Campaign extends Model
{
    //

    public function account(): MorphOne
    {
        return $this->morphOne(Account::class, "accountable");
    }

}
