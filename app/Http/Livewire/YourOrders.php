<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class YourOrders extends Component
{

    public function render()
    {
        $user = Auth::user();
        $orders = $user->orders;

        if (auth()->user()->hasRole('admin')) {
            abort(404);
        }

        return view('livewire.your-orders',[
            'orders' => $orders,
        ]);
    }

}
