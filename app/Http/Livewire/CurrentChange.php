<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CurrentChange extends Component
{

    public $amount = 0;
    public $currency = ['dollar', 'euro', 'sterling'];
    public  $currentSelected;

    public function getConvertedProperty()
    {
        switch ($this->currentSelected)
        {
            case $this->currency[1] :
                return $this->amount * 3.2;
                break;
            case $this->currency[2] :
                return $this->amount * 2.4;
                break;
            default :
                return $this->amount;
                break;
        }
    }

    public function render()
    {
        return view('livewire.current-change');
    }
}
