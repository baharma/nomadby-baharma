<?php

namespace App\Http\Controllers\frontAnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front-end.include.home');
    }
}
