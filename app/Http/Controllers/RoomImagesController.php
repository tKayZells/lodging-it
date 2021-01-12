<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomImages;
use Illuminate\Http\Request;

class RoomImagesController extends Controller
{
    public function index( Request $request )
    {
        return view("welcome");
    }

    /**
     * Form to Add images to room a room type
     * 
     * @param Request
     * @return view
     */
    public function add( Request $request, Room $room )
    {
        return view("welcome");
    }

    
    /**
     * Store image on DB
     * 
     * @param Request
     * @return \Illuminate\Http\RedirectResponse To Add on success insert
     */
    public function store(Request $request)
    {
        return view("welcome");
    }
}
