<?php

namespace Cashier\Responsibilities;

use Cashier\Entities\DTO\OrderDetailsDTO;

class GetMerchantResponsible implements ResponseInterface
{
    public function handle(OrderDetailsDTO $orderDetailsDTO): OrderDetailsDTO
    {
        $merchant = ($orderDetailsDTO->getProductDetails())->merchant;
        $orderDetailsDTO->setMerchantId($merchant->id);
        return $orderDetailsDTO;
    }
}
