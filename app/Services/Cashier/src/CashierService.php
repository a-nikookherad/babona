<?php

namespace Cashier;


use Cashier\Entities\DTO\OrderDetailsDTO;
use Cashier\Entities\Models\Order;
use Cashier\Responsibilities\InvoiceKernel;
use Cashier\Traits\CampaignTrait;
use Cashier\Traits\OrderTrait;
use Cashier\Traits\PaymentTrait;

class CashierService
{
    use OrderTrait, PaymentTrait, CampaignTrait;

    private $basket;

    public function setBasket($basket)
    {
        $this->basket=$basket;
        return $this;
    }

    public function createInvoice()
    {
        $order = resolve(Order::class);
        foreach ($this->basket->productDetails as $productDetail) {
            $orderDetailsDTO = resolve(OrderDetailsDTO::class);
            $orderDetailsDTO->setProductDetails($productDetail);
            $orderDetailsDTO->setOrder($order);
            $orderDetailsDTO->setBasket($this->basket);
            resolve(InvoiceKernel::class)->handle($orderDetailsDTO);
        }
    }

}
