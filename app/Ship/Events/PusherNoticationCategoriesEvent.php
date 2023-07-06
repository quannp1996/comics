<?php

namespace App\Ship\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;

class PusherNoticationCategoriesEvent implements ShouldBroadcast
{
    use Dispatchable;

    public $message;
    public $image;
    public string $title;
    public int $catID;

    public function __construct(string $message, string $title, string $avatar, int $catID)
    {
        $this->message  = $message;
        $this->title = $title;
        $this->image = $avatar;
        $this->catID = $catID;
    }

    public function broadcastOn()
    {
        return ['notification_'. $this->catID];
    }
}
