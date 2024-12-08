<?php

namespace Database\Seeders;

use App\Services\Ecommerce\src\Database\Seeders\CategoriesSeeder;
use App\Services\Finance\src\Database\Seeders\WalletSeeder;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        /*
          User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            ]);*/
        $this->call([
//            \Finance\Database\Seeders\DatabaseSeeder::class,
            \Production\Database\Seeders\DatabaseSeeder::class,
//            MerchantSeeder::class,
//            DefaultUserSeeder::class,
//            BankSeeder::class,
        ]);
    }
}
