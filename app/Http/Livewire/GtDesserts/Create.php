<?php

namespace App\Http\Livewire\GtDesserts;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Subscriber;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Gate;
use App\Notifications\NewProductNotification;

class Create extends Component
{
    use WithFileUploads;
    
    public $name;
    public $slug;
    public $price;
    public $description;
    public $image;
    public $category_id;

    public $name_focused;
    
    protected function rules()
    {
        return [
            'name' => 'string|required',
            'slug' => 'required|unique:products,slug',
            'price' => 'required|integer',
            'description' => 'string|required|max:255',
            'image' => 'nullable|required|image|max:3024',
        ];
    }

    public function mount()
    {
        $this->name_focused = false;
    }


    public function submit()
    {
        $this->validate();

        if ($this->image != null) {
            $image_extension = $this->image->getClientOriginalExtension();
            $image_url = $this->image->storeAs('images', $this->slug . '-image.' . $image_extension);
            $image_url = url($image_url);
        } else {
            $image_url = null;
        }

        $dessertsCategory = Category::where('name', 'Desserts')->first();

        $gt_desserts = Product::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'price' => $this->price,
            'description' => $this->description,
            'image' => $image_url,
            'category_id' => $dessertsCategory->id, 
        ]);

        $subscribers = Subscriber::all();

        foreach ($subscribers as $subscriber) {
            $subscriber->notify(new NewProductNotification($gt_desserts, $subscriber->email));
        }
        
        session()->flash('flash.banner', 'Product successfully created');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('gt_desserts');

    }

    public function render()
    {
        abort_if(Gate::denies('edit_products'), 403);
        
        if ($this->name != null && $this->name_focused == true) {
            $this->slug = Str::slug($this->name, '-');
        }

        $this->categories = Category::all();
        
        return view('livewire.gt-desserts.create', [
            'categories' => $this->categories,
        ]);
    }
}
