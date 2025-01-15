<?php

namespace Response;

use Illuminate\Support\Facades\Facade;

/**
 * @method static ResponseService success($client = "web", $message = "", $data = [])
 * @method static ResponseService failed($client = "web", $message = "", $data = [])
 * @method static ResponseService view(string $view, $compactData = null)
 * @method static ResponseService redirect($route)
 * @method static ResponseService code(int $code)
 * @method static ResponseService jsonData($jsonData)
 */
class Response extends Facade
{
    public static function getFacadeAccessor()
    {
        return ResponseService::class;
    }

}
