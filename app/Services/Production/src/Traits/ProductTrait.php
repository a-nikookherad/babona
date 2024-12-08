<?php

namespace Production\Traits;

use Production\Entities\Models\Product;

trait ProductTrait
{
    public function products(array $filter, int $perPage)
    {
        return Product::query()
            ->where($filter)
            ->paginate($perPage);
    }

    public function product($id)
    {
        return Product::query()
            ->where("id", $id)
            ->first();
    }

    public function addProduct(array $data)
    {
        return Product::query()
            ->create($data);
    }

    public function updateProduct($product_id, array $data)
    {
        return Product::query()
            ->where("id", $product_id)
            ->update($data);
    }

    public function deleteProduct($id)
    {
        return Product::query()
            ->where("id", $id)
            ->delete();

    }
}
