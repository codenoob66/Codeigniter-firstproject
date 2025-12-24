<?php

namespace App\Controllers;

class HelloController extends BaseController
{
    public function index()
    {
        $data['title'] = "Welcome to CodeIgniter";
        $data['message'] = "This is my first page!";
        $data['meow'] = "test";
        $itot['meow'] = "test";

        // This sends the $data array to the view file
        return view('hello_view', $data, $itot);
    }
}