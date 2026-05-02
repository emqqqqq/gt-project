<?php


namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subscriber;
use App\Jobs\SendNewProductEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Notifications\NewSubscriberNotification;

class SubscribeToNewsletter extends Component

{
    public $email;

    public function subscribe()
    {
        $existingSubscriber = Subscriber::where('email', $this->email)->first();

        if ($existingSubscriber) {
            Session::flash('already_subscribed', true);
        } else {
            $this->validate([
                'email' => 'required|email|unique:subscribers,email',
            ]);

            $subscriber = Subscriber::create([
                'email' => $this->email,
            ]);

            $subscriber->notify(new NewSubscriberNotification($subscriber->email));

            Session::flash('subscribed', true);
        }
    }    

    public function render()
    {
        return view('livewire.subscribe-to-newsletter');
    }
}