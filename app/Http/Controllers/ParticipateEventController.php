<?php

namespace App\Http\Controllers;

use App\Models\ParticipateEvent;
use Illuminate\Http\Request;

class ParticipateEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participateEvents = ParticipateEvent::all();
        return $participateEvents;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (ParticipateEvent::create($request->all())) {
            return response()->json(
                [
                    'done' => 'participant enregistré avec succes'
                ]
                );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParticipateEvent  $participateEvent
     * @return \Illuminate\Http\Response
     */
    public function show(ParticipateEvent $participateEvent)
    {
        return $participateEvent;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ParticipateEvent  $participateEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParticipateEvent $participateEvent)
    {
        if ($participateEvent->update($request->all())) {
            return response()->json(
                [
                    'done' => 'participant modifié avec succes'
                ]
                );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParticipateEvent  $participateEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParticipateEvent $participateEvent)
    {
        $participateEvent->delete();
    }
}
