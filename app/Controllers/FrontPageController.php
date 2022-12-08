<?php

namespace App\Controllers;

class FrontPageController extends BaseController
{
    public function index()
    {
        return view('FrontPage');
    }
}
