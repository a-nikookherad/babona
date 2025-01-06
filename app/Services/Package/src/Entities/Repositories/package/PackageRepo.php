<?php

namespace Package\Entities\Repositories\Package;

use Illuminate\Support\Facades\Facade;

/**
 * @method static PackageRepoService all()
 * @method static PackageRepoService paginate($perPage)
 * @method static PackageRepoService getByPluck($pluck)
 * @method static PackageRepoService getById($id, $with = [])
 * @method static PackageRepoService getByCondition($condition, $with = [])
 * @method static PackageRepoService getByRelation($relation, $whereHas, $where = [], $with = [])
 * @method static PackageRepoService getByFilter(callable $filter)
 * @method static PackageRepoService getByFilterPaginate(callable $filter, int $perPage)
 * @method static PackageRepoService store(array $data)
 * @method static PackageRepoService update($id, array $data)
 * @method static PackageRepoService updateOrCreate(array $condition, array $data)
 * @method static PackageRepoService delete($id)
 * @method static PackageRepoService forceDelete($id)
 */
class PackageRepo extends Facade
{
    public static function getFacadeAccessor()
    {
        return PackageRepoService::class;
    }
}
