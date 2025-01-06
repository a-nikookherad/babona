<?php

namespace App\Services\Cashier\src\Entities\DTO;

use Cashier\Entities\Models\Order;
use Production\Entities\Models\Basket;

class InvoiceDTO
{
    private array $items = [];
    private Order $order;
    private Basket $basket;

    public function setItems(array $items): InvoiceDTO
    {
        $this->items = array_merge($this->items, $items);
        return $this;
    }

    public function setOrder(Order $order): InvoiceDTO
    {
        $this->order = $order;
        return $this;
    }

    public function attachInvoicesToOrder(): InvoiceDTO
    {
        $this->order->invoices()->attach($this->items);
        return $this;
    }

    public function setBasketBoughtAt(): InvoiceDTO
    {
        $this->basket->bought_at = now()->format("Y-m-d H;i:s");
        $this->basket->save();
        return $this;
    }

    public function setBasket(Basket $basket): InvoiceDTO
    {
        $this->basket = $basket;
        return $this;
    }
}
