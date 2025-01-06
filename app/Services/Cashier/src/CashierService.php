<?php

namespace Cashier;


use App\Services\Cashier\src\Entities\DTO\InvoiceDTO;
use Cashier\Entities\DTO\OrderDetailsDTO;
use Cashier\Entities\Models\Order;
use Cashier\Responsibilities\InvoiceKernel;
use Cashier\Traits\CampaignTrait;
use Cashier\Traits\OrderTrait;
use Cashier\Traits\PaymentTrait;
use http\Exception\UnexpectedValueException;

class CashierService
{
    use OrderTrait, PaymentTrait, CampaignTrait;

    private $basket;

    public function setBasket($basket)
    {
        if (!is_null($basket->bought_at)) {
            throw(new UnexpectedValueException("Basket paid before"));
        }
        $this->basket = $basket;
        return $this;
    }

    public function createInvoice()
    {
        $order = resolve(Order::class);
        $order->basket_id = $this->basket->id;
        $invoiceDTO=resolve(InvoiceDTO::class);
        foreach ($this->basket->productDetails as $productDetail) {
            $orderDetailsDTO = resolve(OrderDetailsDTO::class);
            $orderDetailsDTO->setProductDetails($productDetail);
            $orderDetailsDTO->setOrder($order);
            $orderDetailsDTO->setBasket($this->basket);
            resolve(InvoiceKernel::class)->handle($orderDetailsDTO);
        }

        //check total price

        //check whether wallet's credit is enough or need to payment

        //send to payment page if needed

        //check total price for each merchant


    }

}
