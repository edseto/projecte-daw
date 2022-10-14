<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomModel extends Model
{
    use HasFactory;
    protected $table = 'rooms';

    public function establishment()
    {
        return $this->belongsTo(EstablishmentModel::class, 'establishment_id');
    }
}
