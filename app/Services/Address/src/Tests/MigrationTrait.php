<?php

namespace Address\Tests;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

trait MigrationTrait
{
    public function setUp(): void
    {
        parent::setUp();

        $path = Str::replace(base_path('\\'), "", __DIR__ . "/../../Database/Migrations/");
        Artisan::call("migrate", ["--path" => $path]);
    }

    public function tearDown(): void
    {
        Artisan::call("migrate:rollback");
        parent::tearDown();
    }
}
