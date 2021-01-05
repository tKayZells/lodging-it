<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    
    /**
     * A hotel has multiple rooms
     */
    public function rooms()
    {
        return $this->hasMany(Room::class, "hotel_id");
    }
}