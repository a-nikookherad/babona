<?php

namespace Production\Entities\Repositories\storehouse;

use App\Services\Production\src\Entities\Repositories\RepositoryAbstract;
use Production\Entities\Models\Storehouse;

class StorehouseRepoService extends RepositoryAbstract
{

    public function __construct()
    {
        $this->instance = resolve(Storehouse::class);
    }

}
