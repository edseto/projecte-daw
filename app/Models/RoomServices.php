<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomServices extends Model
{
    use HasFactory;
    protected $table = 'room_services';

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}