<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserLocation;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userLocation = User::find($request->id)->location;

        return response(['user_location' => $userLocation], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $newLocation = UserLocation::create([
            'name' => $request->name,
            'lat' => $request->lat,
            'long' => $request->long
        ]);

        return response(['message' => 'Location created successfully']);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $userLocation = UserLocation::where('user_id' , $request->user_id)->firstOrFail();

        $userLocation->lat = $request->lat;

        $userLocation->long = $request->long;

        $userLocation->name = $request->name;

        $userLocation->update();

        return response()->json([
            'message' => 'User location updated successfully'
        ], 200);
    }

}
