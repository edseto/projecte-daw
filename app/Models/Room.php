<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'rooms';

    public function establishment()
    {
        return $this->belongsTo(Establishment::class, 'establishment_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function roomHasServices()
    {
        return $this->hasMany(RoomHasService::class, 'room_id');
    }
}
