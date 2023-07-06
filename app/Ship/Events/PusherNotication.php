<?php

namespace App\Ship\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PusherNotication implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $image;
    public string $title;
    public function __construct(string $message, string $title = '', string $avatar = '')
    {
        $this->message  = $message;
        $this->title = $title;
        $this->image = $avatar;
    }

    public function broadcastOn()
    {
        return ['notification'];
    }
}
