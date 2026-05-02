<?php

namespace App\Http\Livewire\Chat;

use App\Events\MessageSent;
use App\Models\User;
use App\Models\Message;
use Livewire\Component;
use App\Models\Conversation;

class SendMessage extends Component
{
    public $selectedConversation;
    public $receiverInstance;
    public $createdMessage;
    public $body;

    protected $listeners = [
        'updateSendMessage',
        'dispatchMessageSent'

    ];

    public function updateSendMessage(Conversation $conversation, User $receiver)
    {
        //dd($conversation, $receiver);
        $this->selectedConversation = $conversation;
        $this->receiverInstance = $receiver;
    }

    public function sendMessage()
    {
        //dd($this->body);
        if($this->body == null) {
            return null;
        }

        $this->createdMessage = Message::create([
            'conversation_id'=>$this->selectedConversation->id,
            'sender_id'=>auth()->id(),
            'receiver_id'=>$this->receiverInstance->id,
            'body'=>$this->body,
        ]);

        $this->selectedConversation->last_time_message = $this->createdMessage->created_at;

        $this->selectedConversation->save();

        $this->reset('body');

        $this->emitSelf('dispatchMessageSent');

        $this->emitTo('chat.chatbox', 'pushMessage', $this->createdMessage->id);

        $this->emitTo('chat.chat-list', 'refresh');
    }

    public function dispatchMessageSent()
    {
        // dd(Auth()->user(), $this->createdMessage, $this->selectedConversation, $this->receiverInstance);
        broadcast(new MessageSent(Auth()->user(), $this->createdMessage, $this->selectedConversation, $this->receiverInstance));
    
    }

    public function render()
    {
        return view('livewire.chat.send-message');
    }
}
