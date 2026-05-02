<?php

namespace App\Http\Livewire\Customcakes;

use Livewire\Component;
use App\Models\CakeOrder;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $listeners = [
        '$refresh'
    ];

    public $per_page = [10, 25, 50];
    public $per_page_selected = 10;
    public $search = '';
    
    public $name;
    public $email;
    public $phone;
    public $description;
    public $slug;
    public $image;
    public $delivery;
    public $address;
    public $user_id;

    public $name_focused;
    
    public function delete_order($cake_order)
    {
        $cake = CakeOrder::find($cake_order);
        $cake->delete();

        $this->emitTo('customcakes.create', '$refresh');
    }

    protected function rules()
    {
        return [
            'name' => 'string|required',
            'phone' => 'required|numeric|regex:/^[0-9]{9}$/',
            'description' => 'string|required|max:255',
            'slug' => 'required|unique:cake_orders,slug',
            'image' => 'nullable|image|max:3024',
            'delivery' => 'boolean|required',
            'address' => $this->delivery ? 'required|string' : 'nullable|string',
        ];

    }

    public function mount()
    {
        $this->email = Auth::user()->email;
        $this->user_id = Auth::user()->id;
        $this->delivery = false;
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

        $cakeOrderData = [
            'name' => $this->name,
            'email' => Auth::user()->email,
            'phone' => $this->phone,
            'description' => $this->description,
            'slug' => $this->slug,
            'image' => $image_url,
            'delivery' => $this->delivery,
            'user_id' => Auth::user()->id,
        ];
    
        if ($this->delivery) {
            $cakeOrderData['address'] = $this->address;
        } else {
            $cakeOrderData['address'] = null;
        }
    
        $cake_order = CakeOrder::create($cakeOrderData);

        session()->flash('flash.banner', 'Order successfully created');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('custom_cake');

    }

    public function render()
    {

        if ($this->name != null && $this->name_focused == true) {
            $this->slug = Str::slug($this->name, '-');
        }
        
        $query = CakeOrder::query();
        $query->where('name', 'like', '%' . $this->search . '%');


        $cake_orders = $query->paginate($this->per_page_selected);

        return view('livewire.customcakes.create', [
            'cake_orders' => $cake_orders
        ]);
    }

}
