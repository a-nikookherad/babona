<?php

namespace Response\Types;

class HtmlResponse
{
    private string $view;
    private string $redirect;
    private $compactData;

    public function view($view)
    {
        $this->view = $view;
        return $this;
    }

    public function compactData($compactData)
    {
        $this->compactData = $compactData;
        return $this;
    }

    public function redirect($route)
    {
        $this->redirect = $route;
        return $this;
    }

    public function success($message)
    {
        if ($this->redirect) {
            return redirect($this->redirect)->with("success", $message);
        }
        return view($this->view, $this->compactData)
            ->with("success", $message);
    }

    public function failed($message)
    {
        if ($this->redirect) {
            return redirect($this->redirect)->with("error", $message);
        }
        return view($this->view, $this->compactData)
            ->with("error", $message);
    }
}
