<?php

namespace App\Http\Livewire\GtDesserts;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class Index extends Component
{
    protected $listeners = [
        '$refresh'
    ];

    public function delete_dessert(Product $dessert)
    {
        $this->emitTo('modal', 'delete_dessert', $dessert->id);
    }

    public function view_dessert(Product $product, $producttype)
    {
        $this->emitTo('view', 'view_product', $product, $producttype);
    }


    public function render()
    {
        $products = Product::with('category')->get();
        $categories = Category::all();
    
        $filteredCategory = $categories->filter(function ($category) {
            return $category->name === 'Desserts';
        })->first(); 
    
        $desserts = $products->filter(function ($product) use ($filteredCategory) {
            return $product->category->id === $filteredCategory->id;
        });
    
        return view('livewire.gt-desserts.index', [
            'desserts' => $desserts,
            'category' => $filteredCategory
        ]);
    }
}
