<?php

namespace Production\Entities\Repositories\detail;

use Production\Entities\Repositories\RepositoryAbstract;
use Production\Entities\Models\ProductDetail;

class ProductDetailRepoService extends RepositoryAbstract
{

    public function __construct()
    {
        $this->instance = resolve(ProductDetail::class);
    }

}
