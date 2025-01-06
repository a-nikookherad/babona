<?php

namespace Cashier\Responsibilities;

use Cashier\Entities\DTO\OrderDetailsDTO;

class CalculatePriceResponsible implements ResponseInterface
{

    public function handle(OrderDetailsDTO $orderDetailsDTO): OrderDetailsDTO
    {
        $productDetails = $orderDetailsDTO->getProductDetails();
        $price = $productDetails->price - ($productDetails->price * ($productDetails->discount / 100));
        $orderDetailsDTO->setPrice($price);
        return $orderDetailsDTO;
    }
}
