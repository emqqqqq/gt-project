<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Message;
use Livewire\Component;
use App\Models\Conversation;

class SearchUser extends Component
{
    public $search = '';
    public $searchResults = [];
    public $message = 'hello how are you';

    public function checkconversation($receiverId){
        //dd($receiverId);
        $checkedConversation = Conversation::where('receiver_id', auth()->user()->id)->where('sender_id', $receiverId)->orWhere('receiver_id', $receiverId)->where('sender_id', auth()->user()->id)->get();
        if(count($checkedConversation) == 0) {
            // dd('no convo');
            $createdConversation = Conversation::create(['receiver_id' => $receiverId, 'sender_id'=>auth()->user()->id ]);
            $createdMessage = Message::create(['conversation_id'=> $createdConversation->id, 'sender_id'=>auth()->user()->id, 'receiver_id'=>$receiverId, 'body'=>$this->message]);
            $createdConversation->save();
            //dd($createdMessage);
        }
        else if(count($checkedConversation) >= 1){
            dd('convo ima');
        }
    }

    public function showUser($id)
    {
        $this->search = '';
        $this->emitTo('activities', 'showUser', $id);
    }

    public function render()
    {
        if (strlen($this->search) >= 3) {
            $this->searchResults = User::select('id', 'name', 'profile_photo_path')->whereNotNull('email_verified_at')->where('id','!=',auth()->id())->where('name', 'like', '%' . $this->search . '%')->get();
        }


        return view('livewire.search-user');
    }
}
