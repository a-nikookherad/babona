<?php

namespace Cashier\Responsibilities;

class InvoiceKernel
{
    private $responsibilities = [
        GetMerchantResponsible::class,
        AcceptanceCampaignResponsible::class,
        AttachInvoiceToOrderResponsible::class,
    ];

    public function handle($orderDetailsDTO)
    {
        array_reduce(array_reverse($this->responsibilities), function ($carry, $responsible) {
            $carry = resolve($responsible)->handle($carry);
            return $carry;
        }, $orderDetailsDTO);
    }
}
