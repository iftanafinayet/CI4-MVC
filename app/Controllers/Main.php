<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Main extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function Resume()
    {
        return view('resume');
    }

    public function Project()
    {
        return view('project');
    }

    public function Contact()
    {
        return view('contact');
    }
}