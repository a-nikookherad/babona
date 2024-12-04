<?php

namespace Finance\Database\Seeders;

use Finance\Entities\Models\Account;
use Finance\Entities\Models\Wallet;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->wallets() as $wallet) {
            $wallet = Wallet::query()
                ->updateOrCreate($wallet, $wallet);
            $account = new Account();
            $account->wallet_id = $wallet->id;
            $account->type = "treasury";
            $wallet->treasuryAccount()->save($account);

        }
    }

    private function wallets()
    {
        return [
            [
                "instrument" => "tmn",
                "name" => "toman",
                "fa_name" => "تومان",
                "club_id" => null,
            ],
        ];
    }
}
