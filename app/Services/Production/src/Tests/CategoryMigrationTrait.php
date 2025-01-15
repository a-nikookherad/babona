<?php

namespace Production\Tests;

use Attachment\Entities\Models\File;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

trait CategoryMigrationTrait
{
    public function setUp(): void
    {
        parent::setUp();
        Schema::disableForeignKeyConstraints();
        $path = Str::replace(base_path('\\'), "", __DIR__ . "/../Database/Migrations/");
        Artisan::call("migrate", ["--path" => $path]);
//        File::up();
    }

    public function _tearDown(): void
    {
        Artisan::call("migrate:rollback");
        File::down();
        parent::tearDown();
    }
}
