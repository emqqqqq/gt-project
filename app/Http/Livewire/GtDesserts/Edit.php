<?php

namespace App\Http\Livewire\GtDesserts;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Gate;

class Edit extends Component
{
    use WithFileUploads;
    
    public $dessert_id;
    public $name;
    public $slug;
    public $price;
    public $description;
    public $image;

    public $name_focused;
    public $image_url; 


    public function mount($dessert)
    {
        $this->dessert_id = $dessert->id;
        $this->name = $dessert->name;
        $this->slug = $dessert->slug;
        $this->price = $dessert->price;
        $this->description = $dessert->description;
        $this->image = $dessert->image;

        $this->name_focused = false;
    }

    protected function rules()
    {
        return [
            'name' => 'string|required',
            'slug' => 'required|unique:products,slug, ' . $this->dessert_id,
            'price' => 'required|integer',
            'description' => 'string|required|max:255',
            'image' => $this->image && filter_var($this->image, FILTER_VALIDATE_URL) ? 'nullable|url' : 'nullable|image|max:3024',
        ];
    }

    public function submit(){
        $this->validate();

        if ($this->image != null && !(filter_var($this->image, FILTER_VALIDATE_URL))) {
            $image_extension = $this->image->getClientOriginalExtension();
            $this->image_url = $this->image->storeAs('images', $this->slug . '-image.' . $image_extension);
            $this->image_url = url($this->image_url);
        } else {
            $this->image_url = $this->image;
        }

        $dessertCategory = Category::where('name', 'Desserts')->first();
        $dessert = Product::find($this->dessert_id);

        $dessert->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'price' => $this->price,
            'description' => $this->description,
            'image' => $this->image_url,
            'category_id' => $dessertCategory->id, 
        ]);
                
        session()->flash('flash.banner', 'Blogs successfully saved.');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('gt_desserts');
    }
    
    public function render()
    {
        if ($this->name != null && $this->name_focused == true) {
            $this->slug = Str::slug($this->name, '-');
        }
        $this->categories = Category::all();
        
        abort_if(Gate::denies('edit_products'), 403);
        return view('livewire.gt-desserts.edit', [
            'categories' => $this->categories,
        ]);
    }
}
