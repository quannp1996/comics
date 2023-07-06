<?php

namespace App\Ship\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PusherHomeNotication implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public function __construct(string $message)
    {
        $this->message  = $message;
    }

    public function broadcastOn()
    {
        return ['notification_home'];
    }
}
