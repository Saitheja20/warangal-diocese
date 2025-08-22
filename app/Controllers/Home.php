<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function welcome(): string
    {
        return view('welcome_message');
    }

    public function newsletters(): string
    {
        return view('news-letters');
    }
}
