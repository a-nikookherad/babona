<?php

namespace Response\Types;

class JsonResponse
{
    private int $code;

    private $jsonData;

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

    public function success($message)
    {
        return response()->json([
            "message" => $message,
            "data" => $this->jsonData
        ], $this->code);
    }

    public function failed($message)
    {
        return response()->json([
            "message" => $message,
            "data" => $this->jsonData
        ], $this->code);
    }
}
