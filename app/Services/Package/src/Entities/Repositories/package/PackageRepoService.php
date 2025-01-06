<?php

namespace Package\Entities\Repositories\Package;

use Package\Entities\Repositories\RepositoryAbstract;
use Package\Entities\Models\Package;

class PackageRepoService extends RepositoryAbstract
{
    public function __construct()
    {
        $this->instance = resolve(Package::class);
    }

}
