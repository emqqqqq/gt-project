<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Modal extends Component
{
    public $model_to_delete = "";
    public $modal_property = "hidden";
    public $model_id = null;

    protected $listeners = [
        'delete_cake' => 'delete_cake',
        'delete_dessert' => 'delete_dessert',
        'delete_ice_cream' => 'delete_ice_cream',
        'delete_category' => 'delete_category',
    ];

    public function hide()
    {
        $this->modal_property = "hidden";
    }

    public function delete_cake($cake_id)
    {
        $this->model_to_delete = "cake";
        $this->modal_property = "block";
        $this->model_id = $cake_id;
    }

    public function confirm_cake_deletion($cake_id)
    {
        $cake = Product::find($cake_id);
        $cake->delete();

        $this->model_to_delete = "";
        $this->modal_property = "hidden";
        $this->model_id = null;
        $this->emitTo('gt-cakes.index', '$refresh');
    }

    public function delete_dessert($dessert_id)
    {
        $this->model_to_delete = "dessert";
        $this->modal_property = "block";
        $this->model_id = $dessert_id;
    }

    public function confirm_dessert_deletion($dessert_id)
    {
        $dessert = Product::find($dessert_id);
        $dessert->delete();

        $this->model_to_delete = "";
        $this->modal_property = "hidden";
        $this->model_id = null;
        $this->emitTo('gt-desserts.index', '$refresh');
    }

    public function delete_ice_cream($ice_cream_id)
    {
        $this->model_to_delete = "ice cream";
        $this->modal_property = "block";
        $this->model_id = $ice_cream_id;
    }

    public function confirm_ice_cream_deletion($ice_cream_id)
    {
        $ice_cream = Product::find($ice_cream_id);
        $ice_cream->delete();

        $this->model_to_delete = "";
        $this->modal_property = "hidden";
        $this->model_id = null;
        $this->emitTo('gt-ice-creams.index', '$refresh');
    }

    public function delete_category($category_id)
    {
        $this->model_to_delete = "Category";
        $this->modal_property = "block";
        $this->model_id = $category_id;
    }

    public function confirm_category_deletion($category_id)
    {
        $category = Category::find($category_id);
        $category->delete();

        $this->model_to_delete = "";
        $this->modal_property = "hidden";
        $this->model_id = null;
        $this->emitTo('our-products.index', '$refresh');
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
