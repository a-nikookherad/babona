<?php

namespace Cashier\Responsibilities;

use Cashier\Entities\DTO\OrderDetailsDTO;

class GetMerchantResponsible implements ResponseInterface
{
    public function handle(OrderDetailsDTO $orderDetailsDTO): OrderDetailsDTO
    {
        return $orderDetailsDTO;
    }
}
