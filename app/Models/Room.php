<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    
    public $timestamps = false;

    protected $fillable = [
        'hotel_id',
        'type',
        'description',
        'adult_occupancy',
        'child_occupancy',
        'base_price'
    ];
    
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

    /**
     * A room has many displayable images
     */
    public function images()
    {
        return $this->hasMany(RoomImages::class, "room_images", "room_id");
    }

    /**
     * A Roomtype has many rooms
     */
    public function roomspecifics()
    {
        return $this->hasMany(RoomSpecific::class, "room_specifics", "room_id");
    }
}
