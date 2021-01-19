<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RoomImages extends Model
{
    use HasFactory;

    
    public $timestamps = false;

    protected $fillable = [
        "room_id",
        "caption",
        "storage",
        "cover"
    ];

    protected static function booted()
    {
        static::creating(function ($roomimage) {
            if(is_null($roomimage->cover) || !$roomimage->cover)
            {
                // If no record with cover 'true' exist
                if( ! DB::table("room_images")->where('cover','=', true)->exists() )
                {
                    // Use current as cover
                    $roomimage->cover = true;
                }
            }
        });
    }

    /**
     * An image is part of one room
     */
    public function room()
    {
        return $this->belongsTo(Room::class, "room_id", "id");
    }
}
