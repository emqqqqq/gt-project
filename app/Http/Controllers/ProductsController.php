<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\CakeOrder;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function our_products()
    {
        return view('our-products.index');
    }
    public function our_products_create()
    {
        return view('our-products.create');
    }
    public function our_products_edit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('our-products.edit', [
            'category' => $category,
        ]);
    }

    public function gt_cakes(){
        return view('gt-cakes.index');
    }
    public function gt_cakes_create(){
        return view('gt-cakes.create');
    }
    public function gt_cakes_edit($slug)
    {
        $cake = Product::where('slug', $slug)->first();
        return view('gt-cakes.edit',[
            'cake' => $cake
        ]);
    }

    public function custom_cake(){    
        return view('custom-cakes.create');
    }

    public function custom_cake_view($cake_order){    
       
        $cakeOrder = CakeOrder::find($cake_order);
        return view('custom-cakes.view', ['cakeOrder' => $cakeOrder]);
    }

    public function gt_desserts(){
        return view('gt-desserts.index');
    }
    public function gt_desserts_create(){
        return view('gt-desserts.create');
    }
    public function gt_desserts_edit($slug)
    {
        $dessert = Product::where('slug', $slug)->first();
        return view('gt-desserts.edit',[
            'dessert' => $dessert
        ]);
    }

    public function gt_ice_creams(){
        return view('gt-ice-creams.index');
    }
    public function gt_ice_creams_edit($slug)
    {
        $ice_cream = Product::where('slug', $slug)->first();
        return view('gt-ice-creams.edit',[
            'ice_cream' => $ice_cream
        ]);
    }
    public function gt_ice_creams_create(){
        return view('gt-ice-creams.create');
    }

}
