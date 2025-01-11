<?php
if (!function_exists("fakeRequest")) {
    function fakeRequest(array $parameters, array $files, $uri = "/", $method = "Post"): \Illuminate\Http\Request
    {
        return (new \Illuminate\Http\Request)
            ->createFromBase(
                \Symfony\Component\HttpFoundation\Request::create(
                    $uri,
                    $method,
                    $parameters,
                    [],
                    $files,
                    []
                )
            );
    }
}
