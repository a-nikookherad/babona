<?php

use Finance\Exceptions\DoNotHaveEnoughCreditException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: [
//            __DIR__ . '/../routes/auth.php',
//            __DIR__ . '/../routes/web.php',
//            __DIR__ . '/../routes/production.php',
        ],
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //todo comment this line of code
        /*        $middleware->validateCsrfTokens(except: [
                    '*',
                ]);*/
        $middleware->web([
            \App\Http\Middleware\LocaleMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        /*        $exceptions->report(function (Throwable $exception) {
                    dd("exception message===> ",$exception->getMessage());
                });*/
//        $exceptions->report(function (DoNotHaveEnoughCreditException $exception) {
//            return false;
//        });
    })->create();
