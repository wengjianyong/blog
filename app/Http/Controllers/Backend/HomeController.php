<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        dd(setting('name'));
        return view('backend.home');
    }
}
