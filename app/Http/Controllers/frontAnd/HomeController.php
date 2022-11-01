<?php

namespace App\Http\Controllers\frontAnd;

use App\Http\Controllers\Controller;
use App\TravelPackge;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $items = TravelPackge::with(['galleries'])->get();
        return view('front-end.include.home', [
            'items' => $items
        ]);
    }
}
