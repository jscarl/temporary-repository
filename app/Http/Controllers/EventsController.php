<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::where([
            ['event_date', '>', Carbon::now()->toDateString()],
            ['status', '=', 'PUBLISHED']
        ])
            ->latest()
            ->get();
        $items = menu('guest', '_json');
        $segment = 'Events';
        return view('pages.events', [
            'events' => $events,
            'items' => $items,
            'segment' => $segment,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $items = menu('guest', '_json');
        $event = Events::where([
            ['slug', '=', $slug],
        ])
            ->first();
        $is_expired_event = Carbon::parse($event->event_end_date)->lt(Carbon::now());
        $suggestions = Events::inRandomOrder()
            ->limit(3)
            ->get();
        return view('pages.event_detail', [
            'items' => $items,
            'event' => $event,
            // 'category' => $cat,
            'suggestions' => $suggestions,
            'is_expired_event' => $is_expired_event,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events)
    {
        //
    }
}
