<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Room;
use Arr;
use Illuminate\Http\Request;

class RoomFeaturesController extends Controller
{

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
                ->with("sync_features", Arr::pluck($room->features()->get(["id"])->toArray(), "id") )
                ->with("headers", [ "", "Name", "Icon" ] );
    }

    /**
     * Save all room features
     * @param Request
     * @return \Illuminate\Http\RedirectResponse To Add on success insert
     */
    public function store(Request $request )
    {
        /**
         * 
         * Check each id individually
         * 'features_id => 'required|array|min:1',
         * features_id.*' => 'exists:App\Models\Feature,id',
         **/
        $validator =  $request->validate([
            'features_id' => 'required|array|min:1|exists:App\Models\Feature,id',
            'room_id' => 'required|exists:App\Models\Room,id'
        ]); 
        
        Room::find($request->room_id)
            ->features()
            ->sync($request->features_id);

        return response()->redirectToRoute("room.features.add", [ "room" => $request->room_id ]);
    }
}
