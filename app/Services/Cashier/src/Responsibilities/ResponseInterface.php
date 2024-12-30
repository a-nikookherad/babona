<?php

namespace Cashier\Responsibilities;

use Cashier\Entities\DTO\OrderDetailsDTO;

interface ResponseInterface
{
    public function handle(OrderDetailsDTO $orderDetailsDTO): OrderDetailsDTO;
}
