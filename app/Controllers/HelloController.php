<?php

namespace App\Controllers;

class HelloController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Welcome Page',
            'username' => 'Rafael'
        ];
        return view("hello_view", $data);
    }
}
