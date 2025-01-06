<?php

namespace Cashier\Responsibilities;

use Cashier\Entities\DTO\OrderDetailsDTO;
use Illuminate\Support\Facades\DB;

class CalculateQuantityResponsible implements ResponseInterface
{

    public function handle(OrderDetailsDTO $orderDetailsDTO): OrderDetailsDTO
    {
        $basket = $orderDetailsDTO->getBasket();
        $productDetails = $orderDetailsDTO->getProductDetails();
        $quantity = DB::table("basket_product_details")
            ->where("basket_id", $basket->id)
            ->where("product_detail_id", $productDetails->id)
            ->select("quantity");
        $orderDetailsDTO->setQuantity($quantity);

        return $orderDetailsDTO;
    }
}
