<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view("welcome");
    }
    
    /**
     * Form to create a new Hotel
     * 
     * @param Request
     * @return view
     */
    public function add(Request $request)
    {
        return view("welcome");
    }
}
