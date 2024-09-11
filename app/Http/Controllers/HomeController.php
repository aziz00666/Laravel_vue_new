<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('home');
    }
}


