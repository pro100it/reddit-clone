<?php

namespace App\Events;

use App\Transport;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TransportStatusChanged
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $transport;
    
    public function __construct()
    {
        $this->transport = $transport;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return ['private-transport-tracker.'.$this->transport->id, 'transport-tracker'];
    }
    
    public function broadcastWith()
    {
        $extra = [
            'model' => $this->transport->model,
            'govnumber' => $this->transport->govnumber,
            'blockbsmt' => $this->transport->bsmts->modelnumber,
        ];

        return array_merge($this->transport->toArray(), $extra);
    }
    
}

