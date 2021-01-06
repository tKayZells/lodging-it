<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomImages extends Model
{
    use HasFactory;

    
    public $timestamps = false;


    /**
     * An image is part of one room
     */
    public function room()
    {
        return $this->belongsTo(Room::class, "rooms", "id");
    }
}
