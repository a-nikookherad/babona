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
                ->updateOrCreate($merchant, $merchant);
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
                "name" => "parsian_push",
                "fa_name" => "پارسیان پوش",
                "brand" => "PARSIAN PUSH",
            ],
        ];
    }
}
