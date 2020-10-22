<?php

namespace App\Http\Livewire;

use App\Service\LicensePriceCalculate;
use Livewire\Component;

class License extends Component
{
	public $teamSize = 2;

    public function render()
    {
        return view('livewire.license',[
        	'amount' => LicensePriceCalculate::calculatePrice($this->teamSize)
        ]);
    }

}
