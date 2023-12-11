<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ScheduleResource;
use App\Http\Resources\V1\ScheduleHomeResource;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = Schedule::get();
        return ScheduleResource::collection($schedules);;
    }

    /**
     * Display a listing of the resource.
     */
    // public function showSchedules()
    // {
    //     $schedules = ScheduleHomeResource::collection(Schedule::get());
    //     return $schedules;
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $schedule = new Schedule();

        $schedule->hourExit = $request->input('hourExit');
        $schedule->hourArrival = $request->input('hourArrival');
        $schedule->date = $request->input('date');
        $schedule-> route_id = $request->input('route_id');
        $schedule-> truck_id = $request->input('truck_id');
        $schedule-> employee_id = $request->input('employee_id');

        $schedule->save();

        return response()->json([
            'message'=> 'Los de el horario han sido Guardados',
            'data'=> $schedule
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        return new ScheduleResource($schedule);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule)
    {
        $schedule->update($request->all());
        return response()->json([
            'message'=> 'Los datos del horario se han actualizado',
            'data'=> $schedule
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return response()->json([
            'message'=> 'Los datos de la mascota han sido eliminados'
        ], Response::HTTP_ACCEPTED);
    }
}
