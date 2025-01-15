<?php

namespace Production\Entities\Repositories\basket;

use Address\Entities\Repositories\RepositoryAbstract;
use Production\Entities\Models\Basket;

class BasketRepoService extends RepositoryAbstract
{
    public function __construct()
    {
        $this->instance = resolve(Basket::class);
    }
}
