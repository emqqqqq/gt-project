<?php

namespace App\Http\Livewire\OurProducts;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Gate;

class Edit extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $image;

    public function mount($category)
    {
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->description = $category->description;
        $this->image = $category->image;

    }
    
    protected function rules()
    {
        return [
            'name' => 'string|required',
            'description' => 'string|required|max:1000',
            'image' => 'nullable|required|image|max:3024',
        ];
    }

    public function submit()
    {
        $this->validate();

        if ($this->image != null) {
            $image_extension = $this->image->getClientOriginalExtension();
            $image_url = $this->image->storeAs('images', 'image.' . $image_extension);
            $image_url = url($image_url);
        } else {
            $image_url = null;
        }

        $category = Category::find($this->category_id);

        $category->update([
            'name' => $this->name,
            'description' => $this->description,
            'image' => $image_url,
        ]);

        session()->flash('flash.banner', 'Category successfully created');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('our_products');

    }

    public function render()
    {
        abort_if(Gate::denies('edit_products'), 403);
        
        return view('livewire.our-products.edit');
    }
}
