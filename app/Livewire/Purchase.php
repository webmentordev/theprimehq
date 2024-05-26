<?php

namespace App\Livewire;

use Livewire\Component;

class Purchase extends Component
{
    public $quantity = 1, $outOfStock = false, $price = 9.99;
    public function render()
    {
        return view('livewire.purchase');
    }
}