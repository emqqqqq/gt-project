<?php

namespace App\Http\Livewire\GtCakes;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        '$refresh'
    ];

    public function delete_cake(Product $cake)
    {
        $this->emitTo('modal', 'delete_cake', $cake->id);
    }

    public function view_cake(Product $product, $producttype)
    {
        $this->emitTo('view', 'view_product', $product, $producttype);
    }

    public function render()
    {    
        $products = Product::with('category')->get();
        $categories = Category::all();

        $filteredCategory = $categories->filter(function ($category) {
            return $category->name === 'Cakes';
        })->first(); 

        $cakes = $products->filter(function ($product) use ($filteredCategory) {
            return $product->category->id === $filteredCategory->id;
        });

        return view('livewire.gt-cakes.index', [
            'cakes' => $cakes,
            'category' => $filteredCategory
        ]);
    }
}