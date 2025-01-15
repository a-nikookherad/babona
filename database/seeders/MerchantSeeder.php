<?php

namespace Database\Seeders;

use App\Models\Merchant;
use Illuminate\Database\Seeder;

class MerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->merchants() as $merchant) {
            Merchant::query()
                ->updateOrCreate(["name" => $merchant["name"]], $merchant);
        }

    }

    private function merchants()
    {
        return [
            [
                "name" => "babona",
                "fa_name" => "بابونا",
                "brand" => "Babona",
            ],
            [
                "name" => "parsian_posh",
                "fa_name" => "پارسیان پوش",
                "brand" => "Parsian Posh",
            ],
        ];
    }
}
