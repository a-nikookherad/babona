<?php

namespace Finance\Entities\Repositories;

use Finance\Entities\Models\Wallet;

class WalletRepoService
{
    /**
     * @var Wallet $instance
     */
    public $instance;

    public function __construct()
    {
        $this->instance = resolve(Wallet::class);
    }

    public function getInstance()
    {
        return $this->instance;
    }

    public function create(array $walletInfo)
    {
        return $this->instance::query()
            ->create($walletInfo);
    }

    public function all()
    {
        return $this->instance::query()
            ->get();
    }

    public function getIds()
    {
        return $this->instance::query()
            ->pluck("id")
            ->all();
    }

    public function getByNameOrDefault($name = "")
    {
        return $this->instance::query()
            ->where("name", $name)
            ->orWhere("is_default", true)
            ->first();
    }
}
