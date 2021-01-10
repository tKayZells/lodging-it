<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomSpecific;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoomSpecificsController extends Controller
{
    public function index( Request $request )
    {
        return view("welcome");
    }

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

        dump($room_specifics);
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
        // dump($request->room_id);
        // if ($validator->fails()) {
        //     return redirect()
        //                 ->redirectTo("room.specifics.add", [ "room" => Room::find($request->room_id) ] )
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        RoomSpecific::create( $request->all() )
                        ->save();

        return response()->redirectTo("room.specifics.add", [ "room" => Room::find($request->room_id) ] );
    }
}
