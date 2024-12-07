<?php

namespace Database\Seeders;

use App\Services\Finance\src\Entities\Models\Bank;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->banks() as $bank) {
            Bank::query()
                ->updateOrCreate($bank, $bank);
        }
    }

    private function banks(): array
    {
        return [
            [
                "name" => "melli",
                "fa_name" => "بانک ملی",
                "depend_to" => "parsian_push",
            ],
        ];
    }
}
