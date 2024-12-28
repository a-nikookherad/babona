<?php

namespace Finance\Entities\Repositories;

use Finance\Entities\Models\Transaction;
use Illuminate\Database\Eloquent\Model;

class TransactionRepoService
{
    /**
     * @var Model $instance
     */
    private $instance;

    public function __construct()
    {
        $this->instance = resolve(Transaction::class);
    }

    public function getTransactionByUuid($uuid)
    {
        return $this->instance::query()
            ->where("uuid", $uuid)
            ->first();
    }
}
