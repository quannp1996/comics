<?php

namespace App\Ship\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;

class PusherEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $image;

    public function __construct(string $message)
    {
        $this->message  = $message;
        $this->image = 'https://images.unsplash.com/photo-1503863937795-62954a3c0f05?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5bebad9a384195ee6577bc2951aa2acd&auto=format&fit=crop&w=1950&q=80';
    }

    public function broadcastOn()
    {
        return ['development-push'];
    }
}
