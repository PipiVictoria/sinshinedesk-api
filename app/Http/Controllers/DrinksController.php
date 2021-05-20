<?php

namespace App\Http\Controllers;

use App\Models\Drinks;
use Illuminate\Http\Request;

class DrinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinkss = Drinks::all();
        return $drinkss;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Drinks::create($request->all())) {
            return response()->json(
                [
                    'done' => 'done',
                ]
                );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Drinks  $drinks
     * @return \Illuminate\Http\Response
     */
    public function show(Drinks $drinks)
    {

        return $drinks;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Drinks  $drinks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drinks $drinks)
    {
        if ($drinks->update($request->all())) {
            return response()->json(
                [
                    'done' => 'done',
                ]
                );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drinks  $drinks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drinks $drinks)
    {
        $drinks->delete();
    }
}
