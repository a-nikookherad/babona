<?php

namespace Cashier;


use Cashier\Traits\CampaignTrait;
use Cashier\Traits\OrderTrait;
use Cashier\Traits\PaymentTrait;

class CashierService
{
    use OrderTrait,PaymentTrait,CampaignTrait;

}
