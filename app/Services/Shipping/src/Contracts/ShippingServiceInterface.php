<?php

namespace Shipping\Contracts;


interface ShippingServiceInterface
{
    public function setOrder();

    public function calculateCost();

    public function assignCarrier();

    public function setState();

    public function getState();

    public function getStage();
}
