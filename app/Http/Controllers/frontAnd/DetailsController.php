<?php

namespace App\Http\Controllers\frontAnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index()
    {
        return view('front-end.include.details');
    }
}
