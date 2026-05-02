<?php

namespace App\Http\Livewire;

use Livewire\Component;

class View extends Component
{
    public $model_to_view = "";
    public $product;
    public $modal_property = "hidden";

    protected $listeners = [
        'view_product' => 'view_product',
    ];

    public function hide()
    {
        $this->modal_property = "hidden";
    }

    public function view_product($product, $producttype)
    {
        $this->model_to_view = $producttype;
        $this->modal_property = "block";
        $this->product = $product;
    }


    public function render()
    {
        return view('livewire.view', [
            "product" => $this->product,

        ]);
    }
}
