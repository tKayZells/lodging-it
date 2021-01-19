<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoomImagesRequest;
use App\Models\Room;
use App\Models\RoomImages;
use Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        return view("rooms.images")
                    ->with("id", $room->id)
                    ->with("headers", [ "#", "Icon", "Caption", "Cover" ] );
    }

    
    /**
     * Store image on DB
     * 
     * @param Request
     * @return \Illuminate\Http\RedirectResponse To Add on success insert
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "room_id" => 'required|exists:App\Models\Room,id',
            "files" => 'required|array',
            "files.*" => 'required|mimes:jpg,jpeg,png',
        ], [
            'room_id.required' => 'Room required to attach images',
            'files.*.required' => 'You need to upload some images',
            'room_id.exists' => 'Selected room is invalid',
            'files.*.mimes' => 'Invalid file type for the images, only: jpg, jpeg and png are accepted',
        ]);

        if ($validator->fails()) {
            return response('error', 400);
        }
        
        if($request->hasFile('files'))
        {
            $room = Room::find($request->room_id);
            $images = [];

            foreach($request->file('files') as $file)
            {
                $imagePath = $file->store('rooms');
                $images[] = new RoomImages([ "caption" => pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME), "storage" => $imagePath ]);
            }

            $room->images()->saveMany( $images );
        }

        Debugbar::info($request->files);
        dump($request->files);

        return response('success', 200);
    }
}
