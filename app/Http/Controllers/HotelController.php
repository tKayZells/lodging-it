<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHotelRequest;
use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    
    /**
     * List of all Hotels 
     * 
     * @param Request
     * @return view
     */
    public function index(Request $request)
    {
        return view("hotels.index")
                ->with("hotels", Hotel::all())
                ->with("headers", [ "#", "Description", "Name", "Country", "City", "Address", "Phone" ]);
    }
    
    /**
     * Form to create a new Hotel
     * 
     * @param Request
     * @return view
     */
    public function add(Request $request)
    {
        return view("hotels.add");
    }

    /**
     * Store the hotel on DB
     * 
     * @param StoreHotelRequest Custom form validation rules
     * @return \Illuminate\Http\RedirectResponse To Index on success insert
     */
    public function store(StoreHotelRequest $request)
    {
        Hotel::create( $request->all() )
                ->save();
        return response()->redirectToRoute("hotels");
    }
}
