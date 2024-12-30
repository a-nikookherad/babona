<?php

namespace Cashier\Responsibilities;

use Cashier\Entities\DTO\OrderDetailsDTO;

class AttachInvoiceToOrderResponsible implements ResponseInterface
{
    public function handle(OrderDetailsDTO $orderDetailsDTO): OrderDetailsDTO
    {
        $order = $orderDetailsDTO->getOrder();
        $order->invoices()->attach($orderDetailsDTO->toArray());
        return $orderDetailsDTO;
    }
}
