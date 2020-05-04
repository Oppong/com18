<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $events = Event::all();
        return view('admin.events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'event_title' => 'required',
            'event_month' => 'required',
            'event_date' => 'required',
            'event_description' => 'required',
            'event_location' => 'required',
        ]);


        $events = new Event;

        $events->event_title = $request->event_title;
        $events->event_date = $request->event_date;
        $events->event_month = $request->event_month;
        $events->event_location = $request->event_location;
        $events->event_description = $request->event_description;
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $events->addMediaFromRequest('image')->toMediaCollection('events');
        }

        $events->save();

        return redirect()->route('event.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $events->event_title = $request->event_title;
        $events->event_date = $request->event_date;
        $events->event_month = $request->event_month;
        $events->event_location = $request->event_location;
        $events->event_description = $request->event_description;
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $events->addMediaFromRequest('image')->toMediaCollection('events');
        }

        $events->save();

        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('event.index');
    }
}
