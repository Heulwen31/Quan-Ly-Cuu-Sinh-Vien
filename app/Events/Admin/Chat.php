<?php

namespace App\Events\Admin;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Chat implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $message;
    public $test;
    public $path;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message, $test, $path)
    {
        $this->message = $message;
        $this->test = $test;
        $this->path = $path;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['chat-with-client'];
    }

    public function broadcastAs()
    {
        return 'event-chat-admin';
    }
}
