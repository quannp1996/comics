<?php

namespace App\Ship\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PusherMangaNotication implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public int $mangaID;
    public function __construct(string $message, int $mangaID)
    {
        $this->message  = $message;
        $this->mangaID  = $mangaID;
    }

    public function broadcastOn()
    {
        return ['notification_manga_' . $this->mangaID];
    }
}
