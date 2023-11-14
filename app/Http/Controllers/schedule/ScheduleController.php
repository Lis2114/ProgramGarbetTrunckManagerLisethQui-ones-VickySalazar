<?php

namespace App\Http\Controllers\schedule;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = Schedule::get();
        return view('schedules.indexSchedules');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('schedules.SchedulesCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Schedule::create([
            'hourExit'=> $request->hourExit,
            'hourArrival'=> $request->hourArrival,
            'date'=> $request->date
        ]);
        return redirect()->route('route.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
