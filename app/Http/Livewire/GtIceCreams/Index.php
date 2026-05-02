<?php

namespace App\Http\Livewire\GtIceCreams;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class Index extends Component
{
    protected $listeners = [
        '$refresh'
    ];

    public function delete_ice_cream(Product $ice_cream)
    {
        $this->emitTo('modal', 'delete_ice_cream', $ice_cream->id);
    }

    public function view_ice_cream(Product $product, $producttype)
    {
        $this->emitTo('view', 'view_product', $product, $producttype);
    }

    public function render()
    {
        $products = Product::with('category')->get();
        $categories = Category::all();
    
        $filteredCategory = $categories->filter(function ($category) {
            return $category->name === 'Ice Creams';
        })->first(); 
    
        $ice_creams = $products->filter(function ($product) use ($filteredCategory) {
            return $product->category->id === $filteredCategory->id;
        });
    
        return view('livewire.gt-ice-creams.index', [
            'ice_creams' => $ice_creams,
            'category' => $filteredCategory
        ]);
    }
}
