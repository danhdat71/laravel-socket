<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class RealtimeEvent implements ShouldBroadcast
{
    protected $content = '';
    protected $sender = '';

    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($content, $sender)
    {
        $this->content = $content;
        $this->sender = $sender;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('channel-1');
    }

    /**
     * Rename event
     * **/
    public function broadcastAs()
    {
        return 'realtime-event';
    }

    /**
     * Rename event
     * **/
    public function broadcastWith()
    {
        return [
            'content' => $this->content,
            'sender' => $this->sender
        ];
    }
}
