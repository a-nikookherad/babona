<?php

namespace App\Services\Production\src\Entities\Repositories;

abstract class RepositoryAbstract
{
    protected $instance;

    public function all()
    {
        return $this->instance::query()
            ->get();
    }

    public function getByPluck($pluck)
    {
        return $this->instance::query()
            ->get($pluck);
    }

    public function getById($id)
    {
        return $this->instance::query()
            ->where("id", $id)
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
