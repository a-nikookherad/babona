<?php

namespace Production\Entities\Repositories\product;

use Production\Entities\Repositories\RepositoryAbstract;
use Production\Entities\Models\Product;

class ProductRepoService extends RepositoryAbstract
{

    public function __construct()
    {
        $this->instance = resolve(Product::class);
    }

}
