<?php

namespace App\Http\Controllers\frontAnd;

use App\Http\Controllers\Controller;
use App\TravelPackge;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = TravelPackge::with(['galleries'])
            ->where('slug', $slug)
            ->first();
        return view('front-end.include.details', ['item' => $item]);
    }
}
