<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomSpecific extends Model
{
    use HasFactory;

    
    public $timestamps = false;

    protected $fillable = [
        'room_id',
        'identification',
        'floor',
        'extra_info',
        'status'
    ];
    
    /**
     * A RoomSpecific belongs to one Room Type
     */
    public function room()
    {
        return $this->belongsTo(Room::class, "rooms", "id");
    }

}
