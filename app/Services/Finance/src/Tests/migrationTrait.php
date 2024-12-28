<?php

namespace Finance\Tests;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use function base_path;

trait migrationTrait
{
    public function _setUp(): void
    {
        parent::setUp();

        $path = Str::replace(base_path('\\'), "", __DIR__ . "/../../Database/Migrations/");
        Artisan::call("migrate", ["--path" => $path]);
    }

    public function _tearDown(): void
    {
        Artisan::call("migrate:rollback");
        parent::tearDown();
    }
}
