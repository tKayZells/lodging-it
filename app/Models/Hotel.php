<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'country',
        'city',
        'address',
        'phone'
    ];

    /**
     * A hotel has multiple rooms
     */
    public function rooms()
    {
        return $this->hasMany(Room::class, "hotel_id");
    }

    /**
     * A hotel displays many images
     */
    public function images()
    {
        return $this->hasMany(HotelImages::class, "hotel_id");
    }
}
