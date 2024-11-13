<?php

namespace Database\Seeders;

use App\Models\V1\Accounting\Account;
use App\Models\V1\Accounting\Wallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->wallets() as $wallet) {
            $wallet=Wallet::query()
                ->updateOrCreate($wallet, $wallet);
            $account=new Account();
            $account->wallet_id=$wallet->id;
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
                "club_id" => "",
            ],
        ];
    }
}
