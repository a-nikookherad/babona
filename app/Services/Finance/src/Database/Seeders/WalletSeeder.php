<?php

namespace Finance\Database\Seeders;

use Finance\Entities\Models\Wallet;
use Finance\Finance;
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
                ->updateOrCreate(["name"=>$wallet["name"]], $wallet);
        }
    }

    private function wallets()
    {
        return [
            [
                "instrument" => "tmn",
                "name" => "toman",
                "fa_name" => "تومان",
                "interest_rate" => 0,
                "club_id" => null,
            ],
            [
                "instrument" => "bon",
                "name" => "bon",
                "fa_name" => "بن",
                "is_permanent" => false,
                "interest_rate" => 0,
                "club_id" => null,
            ],
        ];
    }
}
