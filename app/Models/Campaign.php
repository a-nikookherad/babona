<?php

namespace App\Models;

use Finance\Entities\Models\Account;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Campaign extends Model
{
    //

    public function accounts(): MorphMany
    {
        return $this->morphMany(Account::class, "accountable");
    }

}
