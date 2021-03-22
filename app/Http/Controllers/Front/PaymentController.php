<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendRequest;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function send(Request $request)
    {
        $data = $request->input();

//        dd($data);
        $fees = $this->fees();
        $totals = $this->totals();
        return view('money.send', compact('data', 'fees', 'totals'));
    }

    public function checkSend(SendRequest $request)
    {
        return view('money.confirm');
    }


    public function fees()
    {
        return request('recipientGets') * 0.05;
    }

    public function totals()
    {
        return request('recipientGets') + $this->fees();
    }
}
