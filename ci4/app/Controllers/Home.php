<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        return view('templates/header', [
            'title' => 'Home'
        ])
        . view('home')
        . view('templates/footer');
    }
}
