<?php

namespace Address\Entities\Repositories\Address;

use Address\Entities\Models\Address;
use Address\Entities\Repositories\RepositoryAbstract;

class AddressRepoService extends RepositoryAbstract
{
    public function __construct()
    {
        $this->instance = resolve(Address::class);
    }

    public function createNew($address)
    {
        return $this->instance::query()
            ->newModelInstance($address);
    }
}
