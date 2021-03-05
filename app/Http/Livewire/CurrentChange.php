<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CurrentChange extends Component
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

    public function convertedInverse()
    {
        switch ($this->currentSelected)
        {
            case $this->currency[1] :
                $this->amountToSend = $this->receiveAmount * 1.2046;
                break;
            case $this->currency[2] :
                $this->amountToSend = $this->receiveAmount * 1.3947;
                break;
            default :
                $this->amountToSend = $this->receiveAmount;
                break;
        }
    }

    public function getFeesProperty()
    {
        return $this->receiveAmount * $this->rate;
    }

    public function getTotalsProperty()
    {
        return $this->getFeesProperty() + $this->receiveAmount;
    }

    public function render()
    {
        return view('livewire.current-change');
    }
}
