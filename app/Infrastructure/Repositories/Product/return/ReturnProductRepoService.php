<?php

namespace Production\Entities\Repositories\return;

use Address\Entities\Repositories\RepositoryAbstract;
use Production\Entities\Models\ReturnProduct;

class ReturnProductRepoService extends RepositoryAbstract
{
    public function __construct()
    {
        $this->instance = resolve(ReturnProduct::class);
    }
}
