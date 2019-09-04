<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'lat' => 'required',
            'lng' => 'required',
        ]);

        Location::create([
            'lat' => $request->lat,
            'lng' => $request->lng,
        ]);

        return redirect('/')->withErrors('Successfully created');
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'lat'   => 'required',
            'lng'   => 'required',
            'count' => 'required',
        ]);

        return Location::getLocations($request->lat, $request->lng, $request->count);
    }
}
