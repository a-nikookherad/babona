<?php

namespace Package\Entities\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

abstract class RepositoryAbstract
{
    /**
     * @var Model $instance
     */
    protected $instance;

    public function all()
    {
        return $this->instance::query()
            ->get();
    }

    public function paginate($perPage)
    {
        return $this->instance::query()
            ->paginate($perPage);
    }

    public function getByPluck($pluck)
    {
        return $this->instance::query()
            ->get($pluck);
    }

    public function getById($id, $with = [])
    {
        return $this->instance::query()
            ->where("id", $id)
            ->when(!empty($with), function (Builder $query) use ($with) {
                return $query->with($with);
            })
            ->first();
    }

    public function getByCondition($condition, $with = [])
    {
        return $this->instance::query()
            ->where($condition)
            ->when(!empty($with), function (Builder $query) use ($with) {
                return $query->with($with);
            })
            ->first();
    }

    public function getByRelation($relation, $whereHas, $where = [], $with = [])
    {
        return $this->instance::query()
            ->when(!empty($with), function (Builder $query) use ($with) {
                return $query->with($with);
            })
            ->when(!empty($where), function (Builder $query) use ($where) {
                return $query->where($where);
            })
            ->whereHas($relation, function ($query) use ($whereHas) {
                return $query->where($whereHas);
            })
            ->first();
    }

    public function getByFilter(callable $filter)
    {
        return $this->instance::query()
            ->where($filter)
            ->get();
    }

    public function getByFilterPaginate(callable $filter, int $perPage)
    {
        return $this->instance::query()
            ->where($filter)
            ->paginate($perPage);
    }

    public function store(array $data)
    {
        return $this->instance::query()
            ->create($data);
    }

    public function update($id, array $data)
    {
        return $this->instance::query()
            ->where("id", $id)
            ->update($data);
    }

    public function updateOrCreate(array $condition, array $data)
    {
        return $this->instance::query()
            ->updateOrCreate($condition, $data);
    }

    public function delete($id)
    {
        return $this->instance::query()
            ->where("id", $id)
            ->delete();
    }

    public function forceDelete($id)
    {
        return $this->instance::query()
            ->where("id", $id)
            ->forceDelete();
    }
}
