<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }

    // public function custom_cake()
    // {
    //     return view('front.chat');
    // }

    public function unsubscribe_from_newsletter($email)
    {
        $subscriber = Subscriber::where('email', $email)->first();
        if($subscriber){
            $subscriber->delete();            
            return view('livewire.unsubscribe-from-newsletter');
        }  
        else {
            abort(404);
        }
    }
    
}
