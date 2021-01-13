<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomSpecific;
use Illuminate\Http\Request;

class RoomSpecificsController extends Controller
{
    /**
     * Form to Attach a new Specific room to a room type
     * 
     * @param Request
     * @return view
     */
    public function add( Request $request, Room $room )
    {
        $headers = [
            "#",
            "Identification",
            "Floor",
            "Extra Info",
            "Status"
        ];

        $room_specifics = RoomSpecific::where('room_id', $room->id)->get();

        return view("specifics.add")
                ->with("headers", $headers)
                ->with("specifics", $room_specifics)
                ->with("id", $room->id);
    }

    
    /**
     * Store a Specific on DB
     * 
     * @param Request
     * @return \Illuminate\Http\RedirectResponse To Add on success insert
     */
    public function store(Request $request)
    {
        $validator =  $request->validate([
            'identification' => 'required',
            'floor' => 'required',
            'extra_info' => 'required',
            'room_id' => 'required|exists:App\Models\Room,id'
        ]); 

        RoomSpecific::create( $request->all() )
                        ->save();

        return response()->redirectToRoute("room.specifics.add", [ "room" => $request->room_id ] );
    }
}
