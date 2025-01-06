<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('package {name} {--O|observer} {--F|factory} {--R|repository} {--C|controller  : Whether you want make a controller or not}', function () {
    if ($this->option("observer")) {
    };
    $packageName = $this->argument("name");
    $packageNameSpace = $this->ask("what is Package namespace?");
    $packageAddress = $this->ask("what is Package Address?");
})->purpose("Make a new custom Package");


Artisan::command("migrate:custom", function () {
    \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
    Artisan::call("migrate:refresh");
    \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();
});
