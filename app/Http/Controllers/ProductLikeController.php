<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductLikeController extends Controller
{
    public function your_favorites() {
        return view('front.your-favorites');
    }
    public function remove_from_favorites(Product $product) {
        $user = auth()->user();
        $product = Product::find($product->id); 
        if($user->likes->contains($product->id)) {
            $user->likes()->detach($product); 
            return redirect()->route('your_favorites')->with('success', 'Unliked');
        }
    }

    public function like_cake(Product $cake) {
        $user = auth()->user();
        $cake = Product::find($cake->id); 
        if (!$user->likes->contains($cake->id)) {
            $user->likes()->attach($cake);
            return redirect()->route('gt_cakes')->with('success', 'Liked');
        }
        else {
            $user->likes()->detach($cake); 
            return redirect()->route('gt_cakes')->with('success', 'Unliked');
        }
    }

    public function like_dessert(Product $dessert) {
        $user = auth()->user();
        $dessert = Product::find($dessert->id); 
        if (!$user->likes->contains($dessert->id)) {
            $user->likes()->attach($dessert);
            return redirect()->route('gt_desserts')->with('success', 'Liked');
        }
        else {
            $user->likes()->detach($dessert); 
            return redirect()->route('gt_desserts')->with('success', 'Unliked');
        }
    }

    public function like_ice_cream(Product $ice_cream) {
        $user = auth()->user();
        $ice_cream = Product::find($ice_cream->id); 
        if (!$user->likes->contains($ice_cream->id)) {
            $user->likes()->attach($ice_cream);
            return redirect()->route('gt_ice_creams')->with('success', 'Liked');
        }
        else {
            $user->likes()->detach($ice_cream); 
            return redirect()->route('gt_ice_creams')->with('success', 'Unliked');
        }
    }
}
