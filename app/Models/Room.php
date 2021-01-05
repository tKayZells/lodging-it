<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    
    public $timestamps = false;


    /**
     * A room can have many features
     */
    public function features()
    {
        return $this->belongsToMany(Feature::class, "room_features", "room_id");
    }

    
    /**
     * A Room belongs to one hotel
     */
    public function hotel()
    {
        return $this->belongsTo(Hotel::class, "hotels", "id");
    }
}
