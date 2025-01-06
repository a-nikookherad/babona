<?php

namespace Address\Entities\Repositories\Address;

use Address\Entities\Repositories\Address\AddressRepoService;
use Illuminate\Support\Facades\Facade;

/**
 * @method static AddressRepoService all()
 * @method static AddressRepoService paginate($perPage)
 * @method static AddressRepoService getByPluck($pluck)
 * @method static AddressRepoService getById($id, $with = [])
 * @method static AddressRepoService getByCondition($condition, $with = [])
 * @method static AddressRepoService getByRelation($relation, $whereHas, $where = [], $with = [])
 * @method static AddressRepoService getByFilter(callable $filter)
 * @method static AddressRepoService getByFilterPaginate(callable $filter, int $perPage)
 * @method static AddressRepoService store(array $data)
 * @method static AddressRepoService update($id, array $data)
 * @method static AddressRepoService updateOrCreate(array $condition, array $data)
 * @method static AddressRepoService delete($id)
 * @method static AddressRepoService forceDelete($id)
 * @method static AddressRepoService createNew($address)
 */
class AddressRepo extends Facade
{
    public static function getFacadeAccessor()
    {
        return AddressRepoService::class;
    }
}
