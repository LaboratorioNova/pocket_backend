<?php

namespace App\Events;

use App\Models\Tracking;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PhlebotomistLocationEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    
    public $id;
    public $created_at;
    public $lat;
    public $lng;
    public $userId;
    public $orderId;
    public $phlebotomist;
    
    public function __construct($id, $lat, $lng, $userId, $orderId, $phlebotomist, $created_at)
    {
        $this->id = $id;
        $this->lat = $lat;
        $this->lng = $lng;
        $this->created_at = $created_at;
        $this->userId = $userId;
        $this->orderId = $orderId;
        $this->phlebotomist = $phlebotomist;
    }

    public function broadcastAs() {
        return 'location';
    }

    public function broadCastWith() {
        return [
            "id" => $this->id,
            "lat" => $this->lat,
            "lng" => $this->lng,
            "user_id" => $this->userId,
            "order_id" => $this->orderId,
            "phlebotomist" => $this->phlebotomist,
            "created_at" => $this->created_at,
        ];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn() {
        return new Channel("phlebotomist-location");
    }
}
