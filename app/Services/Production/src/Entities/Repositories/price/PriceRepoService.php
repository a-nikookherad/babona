<?php

namespace Production\Entities\Repositories\price;

use App\Services\Production\src\Entities\Repositories\RepositoryAbstract;
use Production\Entities\Models\Price;

class PriceRepoService extends RepositoryAbstract
{

    public function __construct()
    {
        $this->instance = resolve(Price::class);
    }

}
