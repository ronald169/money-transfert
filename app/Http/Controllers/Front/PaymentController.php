<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendRequest;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public $currency = ['dollar', 'euro', 'sterling'];
    public $currentSelected;

    public $amountToSend = 0;
    public $receiveAmount = 0;
    public $rate = 0.05;

    public function converted()
    {
        switch ($this->currentSelected)
        {
            case $this->currency[1] :
                $this->receiveAmount = $this->amountToSend * 0.83015 ;
                break;
            case $this->currency[2] :
                $this->receiveAmount = $this->amountToSend * 0.717;
                break;
            default :
                $this->receiveAmount = $this->amountToSend;
                break;
        }
    }


    public function send(Request $request)
    {
        $data = $request->input();

        $fees = $this->fees();
        $totals = $this->totals();

        session()->put('fees', $fees);
        session()->put('totals', $totals);

        return view('money.send', compact('data', 'fees', 'totals'));
    }

    public function checkSend(Request $request)
    {
        $data = $request->input();

        session()->put('email', $request->input('email'));


        $fees = $this->fees();
        $totals = $this->totals();

        return view('money.confirm', compact('data', 'fees', 'totals'));
    }

    public function success(Request $request)
    {
        return view('money.success');
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
