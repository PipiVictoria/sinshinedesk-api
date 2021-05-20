<?php

namespace App\Http\Controllers;

use App\Models\TablePosition;
use Illuminate\Http\Request;

class TablePositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tablePositions = TablePosition::all();
        return $tablePositions;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (TablePosition::create($request->all())) {
            return response()->json(
                [
                    'done' => 'emplacement de table enregistré avec succes',
                   // "data" => [ "hour" => $tablePosition->created_at ]
                   //ici on me dit que la variable $tablePosition n'est pas definit
                ]
                );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TablePosition  $tablePosition
     * @return \Illuminate\Http\Response
     */
    public function show(TablePosition $tablePosition)
    {
        return $tablePosition;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TablePosition  $tablePosition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TablePosition $tablePosition)
    {
        if ($tablePosition->update($request->all())) {
            return response()->json(
                [
                    "status" => 200, 
                    //"data" => [ "hour" => $tablePosition->updated_at ]
                ]
                );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TablePosition  $tablePosition
     * @return \Illuminate\Http\Response
     */
    public function destroy(TablePosition $tablePosition)
    {
        $tablePosition->delete();
    }
}
