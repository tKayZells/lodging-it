<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreFeatureRequest;
use App\Models\Feature;

class FeatureController extends Controller
{
    /**
     * List of all features 
     * 
     * @param Request
     * @return view
     */
    public function index(Request $request)
    {
        return view("features.index")
                ->with("features", Feature::all())
                ->with("headers", [ "#", "Name", "Caption", "Icon", "Order" ] );
    }

    /**
     * Form to create a new feature
     * 
     * @param Request
     * @return view
     */
    public function add(Request $request)
    {
        return view("features.add");
    }

    /**
     * Store a feature on DB
     * 
     * @param StoreFeatureRequest Custom form validation rules
     * @return \Illuminate\Http\RedirectResponse To Index on success insert
     * @return \Illuminate\Http\RedirectResponse To Add on error
     */
    public function store(StoreFeatureRequest $request)
    {
        if($request->file('icon')->isValid()){

            $iconPath = $request->file('icon')->store('icons');

            Feature::create([
                'name' => $request->name,
                'caption' => $request->caption,
                'storage' => $iconPath
            ])->save();
            
            return response()->redirectToRoute("features");
        }
        return response()->redirectToRoute("features.add");
    }

}
