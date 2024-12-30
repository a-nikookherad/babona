<?php

namespace Cashier\Entities\DTO;

class OrderDetailsDTO
{
    private $order;
    private $basket;
    private $productDetails;

    private $quantity;
    private $price;
    private $merchant;
    private $delivery_id;
    private $campaignDiscount;
    private $campaign_id;

    public function toArray()
    {
        return [
            $this->productDetails->id => [
                "quantity" => $this->quantity,
                "campaign_discount" => $this->campaignDiscount,
                "campaign_id" => $this->campaign_id,
                "merchant_id" => $this->merchant->id,
//                "delivery_id" => "",
//                "transaction_id" => "",
            ]
        ];
    }

    public function setMerchantId($merchant): OrderDetailsDTO
    {
        $this->merchant = $merchant;
        return $this;
    }

    public function setProduct($product): OrderDetailsDTO
    {
        $this->product = $product;
        return $this;
    }

    public function setProductDetails($productDetails): OrderDetailsDTO
    {
        $this->productDetails = $productDetails;
        return $this;
    }

    public function setQuantity($quantity): OrderDetailsDTO
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function setPrice($price): OrderDetailsDTO
    {
        $this->price = $price;
        return $this;
    }

    public function setCampaignDiscount($campaignDiscount): OrderDetailsDTO
    {
        $this->campaignDiscount = $campaignDiscount;
        return $this;
    }

    public function setCampaignId($campaign_id): OrderDetailsDTO
    {
        $this->campaign_id = $campaign_id;
        return $this;
    }

    public function setOrder($order): OrderDetailsDTO
    {
        $this->order = $order;
        return $this;
    }

    public function setDeliveryId($delivery_id)
    {
        $this->delivery_id = $delivery_id;
        return $this;
    }

    public function setBasket($basket)
    {
        $this->basket = $basket;
        return $this;
    }

    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    public function getCampaignDiscount()
    {
        return $this->campaignDiscount;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getProductDetails()
    {
        return $this->productDetails;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function getMerchantId()
    {
        return $this->merchantId;
    }

    public function getOrder()
    {
        return $this->order;
    }

    public function getDeliveryId()
    {
        return $this->delivery_id;
    }

    public function getBasket()
    {
        return $this->basket;
    }

}
