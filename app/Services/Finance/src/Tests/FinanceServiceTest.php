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
        $wallet = $this->assertCreateWalletCorrectly();

        $user = $this->assertCreateUserWithAccountCorrectly();

        $merchant = $this->assertCreateMerchantWithAccountCorrectly();

        $userToMerchantTransaction = $this->assertTransferWorksCorrectly($wallet, $user, $merchant);

        $this->assertReverseTransferWorksCorrectly($userToMerchantTransaction, $user, $merchant, $wallet);
    }

    private function assertCreateWalletCorrectly()
    {
        $data = [
            "name" => "toman",
            "fa_name" => "تومان",
            "instrument" => "tmn",
            "is_default" => true,
            "is_permanent" => true,
            "reset_count_per_year" => 1,
//            "transaction_accept_manual" => true,
            "maximum_transaction_amount_needs_to_approve" => 90000,
            "interest_rate" => 1,
            "club_id" => null,
        ];
        $wallet = Finance::createWallet($data);

        $this->assertTrue($wallet->exists);

        $this->assertTrue($wallet->treasuryAccount->exists);

        $this->assertTrue($wallet->treasuryAccount->balance->exists);

        $this->assertNotEmpty(Finance::wallets());

        $this->assertEquals(0.0, Finance::credit($wallet->treasuryAccount), "something wrong in balance");

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

    private function assertTransferWorksCorrectly($wallet, User $user, Merchant $merchant)
    {
        $this->assertEquals(0.0, Finance::credit(Finance::account($wallet, $wallet)));
        $this->assertEquals(0.0, Finance::credit(Finance::account($user, $wallet)));
        $transaction = Finance::transfer(Finance::account($wallet, $wallet), Finance::account($user, $wallet), 100000, "for test");
        Finance::acceptTransaction($transaction);
        $user = $this->getUser($user);
        $this->assertEquals(-100000, Finance::credit(Finance::account($wallet, $wallet)));
        $this->assertEquals(100000, Finance::credit(Finance::account($user, $wallet)));

        $this->assertEquals(0.0, Finance::credit(Finance::account($merchant, $wallet)));
        $transaction2 = Finance::transfer(Finance::account($user, $wallet), Finance::account($merchant, $wallet), 50000, "fore test 2");
        $merchant = $this->getMerchant($merchant);
        $this->assertEquals(50000, Finance::credit(Finance::account($user, $wallet)));
        $this->assertEquals(50000, Finance::credit(Finance::account($merchant, $wallet)));
        return $transaction2;
    }

    private function assertCreateUserWithAccountCorrectly(): User
    {
        $user = $this->getTestUser();
        $this->assertTrue($user->exists);
        $this->assertNotEmpty($user->accounts);
        return $user;
    }

    private function assertCreateMerchantWithAccountCorrectly(): Merchant
    {
        $merchant = $this->getTestMerchant();
        $this->assertTrue($merchant->exists);
        $this->assertNotEmpty($merchant->accounts);
        return $merchant;
    }

    private function getUser(User $user): mixed
    {
        return User::query()
            ->where("id", $user->id)
            ->with("accounts.balance")
            ->first();
    }

    private function getMerchant(Merchant $merchant): mixed
    {
        return Merchant::query()
            ->where("id", $merchant->id)
            ->with("accounts.balance")
            ->first();
    }

    private function assertReverseTransferWorksCorrectly($userToMerchantTransaction, User $user, Merchant $merchant, $wallet)
    {
        Finance::reverseTransfer($userToMerchantTransaction, null, "reverse transaction");
        $user = $this->getUser($user);
        $merchant = $this->getMerchant($merchant);
        $this->assertEquals(100000, Finance::credit(Finance::account($user, $wallet)));
        $this->assertEquals(0.0, Finance::credit(Finance::account($merchant, $wallet)));
    }
}
