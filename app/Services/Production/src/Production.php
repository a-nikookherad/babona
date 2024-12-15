<?php

namespace Production;

use Illuminate\Support\Facades\Facade;

/**
 * @method static ProductionService categories()
 * @method static ProductionService category($id)
 * @method static ProductionService addCategory(array $data)
 * @method static ProductionService createCategory($request)
 * @method static ProductionService editCategory($category_id, array $data)
 * @method static ProductionService destroyCategory($id)
 * @method static ProductionService products(array $filter, int $perPage)
 * @method static ProductionService product($id)
 * @method static ProductionService addProduct(array $data)
 * @method static ProductionService createProduct($request)
 * @method static ProductionService editProduct($product_id, array $data)
 * @method static ProductionService destroyProduct($id)
 * @method static ProductionService createBasket($user_id)
 * @method static ProductionService editBasket($user_id, $prices)
 */
class Production extends Facade
{
    public static function getFacadeAccessor()
    {
        return ProductionService::class;
    }
}
