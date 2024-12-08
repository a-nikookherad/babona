<?php

namespace Production;

use Illuminate\Support\Facades\Facade;

/**
 * @method static ProductionService categories()
 * @method static ProductionService category($id)
 * @method static ProductionService addCategory(array $data)
 * @method static ProductionService updateCategory($category_id, array $data)
 * @method static ProductionService deleteCategory($id)
 * @method static ProductionService products(array $filter, int $perPage)
 * @method static ProductionService product($id)
 * @method static ProductionService addProduct(array $data)
 * @method static ProductionService updateProduct($product_id, array $data)
 * @method static ProductionService deleteProduct($id)
 * @method static ProductionService basket($user_id)
 * @method static ProductionService addToBasket($user_id, $prices)
 */
class Production extends Facade
{
    public static function getFacadeAccessor()
    {
        return ProductionService::class;
    }
}
