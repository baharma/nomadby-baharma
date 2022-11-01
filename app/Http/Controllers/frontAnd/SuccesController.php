<?php

namespace App\Http\Controllers\frontAnd;

use App\Http\Controllers\Controller;
use App\Transaction;
use Illuminate\Http\Request;

class SuccesController extends Controller
{
    public function index(Request $request, $id)
    {
        $transaction = Transaction::find($id);
        $transaction->transaction_status = 'PENDING';
        $transaction->save();
        return view('front-end.include.succes');
    }
}
