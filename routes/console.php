<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


Artisan::command("migrate:custom", function () {
    \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
    Artisan::call("migrate:refresh");
    \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();
});
