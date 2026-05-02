<?php

namespace App\Events;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $message;
    public $conversation;
    public $receiver;
    public $receiverId;

    /**
     * Create a new event instance.
     */
    public function __construct(User $user,Message $message,Conversation $conversation,User $receiver)
    {

        $this->user = $user;
        $this->message = $message;
        $this->conversation = $conversation;
        $this->receiverId = $receiver->id;
        //dd($this->receiverId);
    }

    public function broadcastWith()
    {
        return  [
            'user_id' => $this->user->id,
            'message' => $this->message,
            'conversation_id' => $this->conversation->id,
            'receiver_id' => $this->receiverId,
        ];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        // error_log($this->user);
        // error_log($this->receiver);
        //dd("z");

        return [ 
            new PrivateChannel('chat.'.$this->receiverId),
        ];

        // return [ 
        //     new PrivateChannel('chat.12'),
        // ];
    }
}
