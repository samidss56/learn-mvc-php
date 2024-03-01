<?php

class Controller
{
    public function view($view, $data = [])
    {
        $view = str_replace(' ', '', $view);
        require_once "../app/views/{$view}.php";
    }
}
