<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomFeaturesController extends Controller
{
    public function index( Request $request )
    {
        return view("rooms.features");
    }

    /**
     * Form to Attach one or more features to a Room type
     * 
     * @param Request
     * @return view
     */
    public function add( Request $request, Room $room )
    {
        return view("rooms.features")
                ->with("id", $room->id)
                ->with("features", Feature::all( ["id", "name", "storage", "caption"] ))
                ->with("headers", [ "#", "Name", "Icon" ] );
    }

    public function store(Request $request)
    {
        return response()->redirectToRoute("room.features.add", [ "room" => 1 ]);
    }
}
