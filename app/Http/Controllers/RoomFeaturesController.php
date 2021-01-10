<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomFeaturesController extends Controller
{
    public function index( Request $request )
    {
        return view("welcome");
    }

    public function add( Request $request )
    {
        return view("welcome");
    }
}
