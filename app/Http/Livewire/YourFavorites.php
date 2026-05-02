<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class YourFavorites extends Component
{
    protected $listeners = [
        '$refresh'
    ];

    public function view_cake(Product $product, $producttype)
    {
        $this->emitTo('view', 'view_product', $product, $producttype);
    }

    public function render()
    {
        $user = Auth::user();
        $favoriteProducts = $user->likes;
        return view('livewire.your-favorites', [
            'favoriteProducts' => $favoriteProducts,
        ]);
    }
}
