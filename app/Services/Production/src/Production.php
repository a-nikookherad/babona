<?php

namespace Production;

use Illuminate\Support\Facades\Facade;

/**
 * @method static ProductionService categories()
 * @method static ProductionService categoriesPaginate(int $perPage)
 * @method static ProductionService categoriesByPluck(array $columns)
 * @method static ProductionService category($id, $with)
 * @method static ProductionService createCategory($request)
 * @method static ProductionService editCategory($category_id, $request)
 * @method static ProductionService destroyCategory($id)
 *
 * @method static ProductionService products()
 * @method static ProductionService productsPaginate(array $filter, int $perPage)
 * @method static ProductionService product($id)
 * @method static ProductionService createProduct($request, $currentUser)
 * @method static ProductionService editProduct($product_id, $request, $currentUser)
 * @method static ProductionService destroyProduct($id)
 * @method static ProductionService requestToReturnProduct($request)
 * @method static ProductionService increaseProductDetailsQuantities($productDetails_id, $currentUser, $count = 1)
 * @method static ProductionService decreaseProductDetailsQuantities($productDetails_id, $currentUser, $count = 1)
 *
 * @method static ProductionService basket($user_id)
 * @method static ProductionService addToTheBasket($user_id, $productDetails)
 * @method static ProductionService setBasketBoughtAt($basket_id)
 */
class Production extends Facade
{
    public static $mapStatus = [
        "upcoming" => "پیش رو",
        "waiting" => "درانتظار",
        "published" => "منتشرشده",
        "archive" => "غیرفعال",
    ];

    public static function getFacadeAccessor()
    {
        return ProductionService::class;
    }
}
