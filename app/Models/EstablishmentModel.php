<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstablishmentModel extends Model
{
    use HasFactory;
    protected $table = 'establishments';

    public function rooms()
    {
        return $this->hasMany(RoomModel::class);
    }
}
