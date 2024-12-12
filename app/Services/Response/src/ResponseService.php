<?php

namespace Response;

use Response\Types\HtmlResponse;
use Response\Types\JsonResponse;

class ResponseService
{
    private array $map = [
        "text/html" => HtmlResponse::class,
        "application/json" => JsonResponse::class
    ];
    private $class;
    private $methods;
    private $view;
    private $code = 200;
    private $jsonData;
    private $compactData;
    private $redirect = "";

    public function __construct()
    {
        $accept = collect(request()->getAcceptableContentTypes())->filter(function ($item) {
                return in_array($item, ["text/html", "application/json"]);
            })->first() ?? "text/html";
        $this->class = $this->map[$accept];
        $this->methods = array_diff(get_class_methods($this->class), ["success", "failed"]);
    }

    public function code($code)
    {
        $this->code = $code;
        return $this;
    }

    public function jsonData($jsonData)
    {
        $this->jsonData = $jsonData;
        return $this;
    }

    public function redirect($redirect)
    {
        $this->redirect = $redirect;
        return $this;
    }

    public function view($view = "", $compactData = [])
    {
        $this->view = $view;
        $this->compactData = $compactData;
        return $this;
    }

    public function success($message = "")
    {
        $service = resolve($this->class);
        foreach ($this->methods as $method) {
            $service->$method($this->$method);
        }
        return $service->success($message);
    }

    public function failed($message = "")
    {
        $service = resolve($this->class);
        foreach ($this->methods as $method) {
            $service->$method($this->$method);
        }
        return $service->failed($message);
    }
}
