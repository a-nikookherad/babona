<?php

namespace Cashier\Tests;

use Cashier\Cashier;
use Production\Entities\Models\Basket;
use Production\Entities\Models\ProductDetail;
use Tests\TestCase;

class CashierServiceTest extends TestCase
{
    use migrationTrait;

    public function test_cashier_service(): void
    {
        $basket = $this->createBasket();
        $this->assertDatabaseHas($basket);

        Cashier::setBasket($basket)
            ->createInvoice();
    }

    private function createBasket()
    {
        return Basket::factory()
            ->hasAttached(
                ProductDetail::factory(3),
                ["quantity" => 2]
            )
            ->create();
    }
}
