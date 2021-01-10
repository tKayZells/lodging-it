<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoomRequest;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * List of all Rooms 
     * 
     * @param Request
     * @return view
     */
    public function index(Request $request)
    {
        return view("rooms.index")
                ->with("rooms", Room::all())
                ->with("headers", [ "#", "type", "description", "Adult Occupancy", "Child Occupancy", "Base price" ]);
    }
    
    /**
     * Form to create a new Room
     * 
     * @param Request
     * @return view
     */
    public function add(Request $request)
    {
        $room_types = [
            [ 'val' => 'Single', 'text' => 'Single' ], 
            [ 'val' => 'Double', 'text' => 'Double' ], 
            [ 'val' => 'Premium Double', 'text' => 'Premium Double' ], 
            [ 'val' => 'Executive', 'text' => 'Executive' ], 
            [ 'val' => 'Royal', 'text' => 'Royal' ], 
            [ 'val' => 'Premium', 'text' => 'Premium' ], 
            [ 'val' => 'Junior', 'text' => 'Junior' ]
        ];
        
        $hotels = DB::table("hotels")->select("id as val", "name as text")->get();
        // Transform stdclass to a normal array/dictionary [ [ "value"=>"somevalue", "text => "sometext" ] ] 
        $hotels = json_decode( json_encode( $hotels ) , true );

        return view("rooms.add")
                    ->with("room_types", $room_types )
                    ->with("hotels", $hotels );
    }
    

    /**
     * Store Room on DB
     * 
     * @param StoreRoomRequest Custom form validation rules
     * @return \Illuminate\Http\RedirectResponse To Index on success insert
     * TODO redirect to add features 
     */
    public function store(StoreRoomRequest $request)
    {
        $room = Room::create( $request->all() );
        $room->save();
        
        return response()->redirectToRoute("room.specifics.add", [ "room" => $room ]);
    }
}
