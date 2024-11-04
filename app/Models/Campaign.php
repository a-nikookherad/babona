<?php

namespace App\Models;

use App\Models\V1\Account;
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
