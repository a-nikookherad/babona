<?php

namespace App\Models\V1;

use App\Models\V1\Accounting\Account;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Treasury extends Model
{
    protected $fillable = [
        "wallet_id",
        "transaction_accept_manual",
    ];

    public function account(): MorphOne
    {
        return $this->morphOne(Account::class, "accountable");
    }
}
