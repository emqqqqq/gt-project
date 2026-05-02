<?php

namespace App\Http\Livewire\GtIceCreams;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Gate;

class Edit extends Component
{
    use WithFileUploads;
    
    public $ice_cream_id;
    public $name;
    public $slug;
    public $price;
    public $description;
    public $image;

    public $name_focused;
    public $image_url; 


    public function mount($ice_cream)
    {
        $this->ice_cream_id = $ice_cream->id;
        $this->name = $ice_cream->name;
        $this->slug = $ice_cream->slug;
        $this->price = $ice_cream->price;
        $this->description = $ice_cream->description;
        $this->image = $ice_cream->image;

        $this->name_focused = false;
    }

    protected function rules()
    {
        return [
            'name' => 'string|required',
            'slug' => 'required|unique:products,slug, ' . $this->ice_cream_id,
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

        $icecreamsCategory = Category::where('name', 'Ice Creams')->first();
        $ice_cream = Product::find($this->ice_cream_id);

        $ice_cream->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'price' => $this->price,
            'description' => $this->description,
            'image' => $this->image_url,
            'category_id' => $icecreamsCategory->id, 
        ]);
                
        session()->flash('flash.banner', 'Blogs successfully saved.');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('gt_ice_creams');
    }
    
    public function render()
    {
        if ($this->name != null && $this->name_focused == true) {
            $this->slug = Str::slug($this->name, '-');
        }
        $this->categories = Category::all();
        
        abort_if(Gate::denies('edit_products'), 403);
        return view('livewire.gt-ice-creams.edit', [
            'categories' => $this->categories,
        ]);
    }
}
