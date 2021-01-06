<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelImages extends Model
{
    use HasFactory;

    /**
     * This image is from a single hotel
     */
    public function hotel()
    {
        return $this->belongsTo(Hotel::class, "id");
    }
}
