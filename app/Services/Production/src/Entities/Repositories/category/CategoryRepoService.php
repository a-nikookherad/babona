<?php

namespace Production\Entities\Repositories\category;

use App\Services\Production\src\Entities\Repositories\RepositoryAbstract;
use Production\Entities\Models\Category;

class CategoryRepoService extends RepositoryAbstract
{
    public function __construct()
    {
        $this->instance = resolve(Category::class);
    }

}
