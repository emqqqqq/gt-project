<?php

namespace App\Http\Livewire\Customcakes;

use Livewire\Component;

class View extends Component
{
    public $cakeOrder;

    public function mount($cakeOrder)
    {
        $this->cakeOrder = $cakeOrder;
    }

    public function render()
    {
        return view('livewire.customcakes.view');
    }
}
