<?php

namespace Finance\Tests;

use App\Models\Merchant;
use App\Models\User;
use Finance\Finance;
use Tests\TestCase;

class FinanceServiceTest extends TestCase
{
    use migrationTrait;

    public function test_finance_service(): void
    {
        $wallet = $this->assertCreateWallet();

        $this->assertEquals(0.0, Finance::credit($wallet->treasuryAccount), "something wrong in balance");

        $user = $this->getTestUser();
        $this->assertTrue($user->exists);
        $this->assertNotEmpty($user->accounts);

        $merchant = $this->getTestMerchant();
        $this->assertTrue($merchant->exists);
        $this->assertNotEmpty($merchant->accounts);

        $this->assertEquals(0.0, Finance::credit(Finance::account($wallet, $wallet)));
        $this->assertEquals(0.0, Finance::credit(Finance::account($user, $wallet)));
        $transaction = Finance::transfer(Finance::account($wallet, $wallet), Finance::account($user, $wallet), 100000, "for test");
        Finance::acceptTransaction($transaction);
        $user = User::query()
            ->where("id", $user->id)
            ->with("accounts.balance")
            ->first();
        $this->assertEquals(-100000, Finance::credit(Finance::account($wallet, $wallet)));
        $this->assertEquals(100000, Finance::credit(Finance::account($user, $wallet)));


        $transaction2 = Finance::transfer(Finance::account($user, $wallet), Finance::account($merchant, $wallet), 50000, "fore test 2");
        Finance::acceptTransaction($transaction2);
        $merchant = Merchant::query()
            ->where("id", $merchant->id)
            ->with("accounts.balance")
            ->first();
        $this->assertEquals(50000, Finance::credit(Finance::account($user, $wallet)));
        $this->assertEquals(50000, Finance::credit(Finance::account($merchant, $wallet)));
    }

    private function assertCreateWallet()
    {
        $data = [
            "name" => "toman",
            "fa_name" => "تومان",
            "instrument" => "tmn",
            "is_default" => true,
            "is_permanent" => true,
            "reset_count_per_year" => 1,
            "transaction_accept_manual" => true,
//            "maximum_transaction_amount_needs_to_approve" => 90000,
            "interest_rate" => 1,
            "club_id" => null,
        ];
        $wallet = Finance::createWallet($data);

        $this->assertTrue($wallet->exists);

        $this->assertTrue($wallet->treasuryAccount->exists);

        $this->assertTrue($wallet->treasuryAccount->balance->exists);

        $this->assertNotEmpty(Finance::wallets());

        return $wallet;
    }

    private function getTestMerchant()
    {
        $merchant = new Merchant();
        $merchant->name = "test";
        $merchant->save();
        return $merchant;
    }

    private function getTestUser()
    {
        $user = new User();
        $user->name = "test";
        $user->save();

        return $user;
    }
}
