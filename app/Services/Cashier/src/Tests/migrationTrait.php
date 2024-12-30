<?php

namespace Cashier\Tests;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use function base_path;

trait migrationTrait
{
    public function setUp(): void
    {
        parent::setUp();

//        $path = Str::replace(base_path('\\'), "", __DIR__ . "/../Database/Migrations/");
//        Artisan::call("migrate", ["--path" => $path]);
        Schema::disableForeignKeyConstraints();
//        Artisan::call("migrate:rollback");
        Artisan::call("migrate");
        Schema::enableForeignKeyConstraints();
//        Artisan::call("migrate", ["--path" => "database/migrations/0001_01_01_000000_create_users_table.php"]);
//        Artisan::call("migrate", ["--path" => "database/migrations/2024_11_03_212151_create_merchants_table.php"]);
    }

    public function tearDown(): void
    {
        Artisan::call("migrate:rollback");
        parent::tearDown();
    }
}
