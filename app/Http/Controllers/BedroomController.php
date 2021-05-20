<?php

namespace App\Http\Controllers;

use App\Models\Bedroom;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BedroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bedrooms = Bedroom::all();
        return $bedrooms;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Bedroom::create($request->all())) {
            return response()->json(
                [
                    'done' => 'chambre enregistré avec succes',
                    "data" => [ "hour" => $bedroom->created_at ]
                ]
                );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bedroom  $bedroom
     * @return \Illuminate\Http\Response
     */
    public function show(Bedroom $bedroom)
    {
        return $bedroom;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bedroom  $bedroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bedroom $bedroom)
    {
        if ($bedroom->update($request->all())) {
            return response()->json(
                [
                    "status" => 200, 
                    "data" => [ "hour" => $bedroom->updated_at ]
                ]
                );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bedroom  $bedroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bedroom $bedroom)
    {
        $bedroom->delete();
    }
}
