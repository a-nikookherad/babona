<?php

namespace Cashier\Responsibilities;

use Cashier\Entities\DTO\OrderDetailsDTO;

class CalculateQuantityResponsible implements ResponseInterface
{

    public function handle(OrderDetailsDTO $orderDetailsDTO): OrderDetailsDTO
    {
        // TODO: Implement handle() method.

        return $orderDetailsDTO;
    }
}
