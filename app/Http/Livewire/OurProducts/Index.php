<?php

namespace App\Http\Livewire\OurProducts;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class Index extends Component
{
    protected $listeners = [
        '$refresh'
    ];

    public function delete_category(Category $category)
    {
        $this->emitTo('modal', 'delete_category', $category->id);
    }

    public function render()
    {
        $categories = Category::all();

        foreach($categories as $category){
            $routeNames[$category->id] = 'gt_' . Str::lower(str_replace(' ', '_', $category->name));
        }

        return view('livewire.our-products.index', [
            'categories' => $categories,
            'routeNames' => $routeNames,
        ]);
    }
}
