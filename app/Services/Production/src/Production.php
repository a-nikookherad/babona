<?php

namespace Production;

use Illuminate\Support\Facades\Facade;

/**
 * @method static ProductionService categories()
 * @method static ProductionService categoriesPaginate(int $perPage)
 * @method static ProductionService category($id, $with)
 * @method static ProductionService createCategory($request)
 * @method static ProductionService editCategory($category_id, $request)
 * @method static ProductionService destroyCategory($id)
 *
 * @method static ProductionService products()
 * @method static ProductionService productsPaginate(array $filter, int $perPage)
 * @method static ProductionService product($id)
 * @method static ProductionService createProduct($request)
 * @method static ProductionService editProduct($product_id, $request)
 * @method static ProductionService destroyProduct($id)
 *
 * @method static ProductionService basket($user_id)
 * @method static ProductionService addToTheBasket($user_id, $productDetails)
 */
class Production extends Facade
{
    public static function getFacadeAccessor()
    {
        return ProductionService::class;
    }
}
