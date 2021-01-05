<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [
        'name',
        'caption',
        'storage',
        'order'
    ];

    protected static function booted()
    {
        static::creating(function ($feature) {
            if(is_null($feature->order))
            {
                $feature->order = DB::table("features")->max("order") + 1;
            }
        });
    }

    /**
     * A feature appears on multiple rooms
     */
    public function rooms()
    {
        return $this->belongsToMany(Room::class, "room_features", "features_id");
    }

}
