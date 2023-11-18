<?php

namespace App\Http\Controllers\schedule;

use App\Models\Path;
use App\Models\Employee;
use App\Models\Schedule;
use App\Models\Truck;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = Schedule::get();
        return view('schedules.indexSchedules', ['schedules' => $schedules]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paths = Path::get();
        $employees = Employee::get();
        $trucks = Truck::get();
        return view('schedules.CreateSchedules', ['paths' => $paths, 'employees' => $employees, 'trucks' => $trucks]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        Schedule::create([
            'hourExit' => $request->hourExit,
            'hourArrival' => $request->hourArrival,
            'date' => $request->date,
            'route_id' => $request->route,
            'truck_id' => $request->truck,
            'employee_id' => $request->employee

        ]);
        return redirect()->route('schedule.index');
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
        //dd($schedule);
        //$schedule = Schedule::get();
        $paths = Path::get();
        $employees = Employee::get();
        $trucks = Truck::get();
        return view('schedules.UpdateSchedules', ['schedule' => $schedule, 'paths' => $paths, 'employees' => $employees, 'trucks' => $trucks ]);
        //return view('schedules.UpdateSchedules', []);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule)
    {
        $schedule->update([
            'hourExit' => $request->hourExit,
            'hourArrival' => $request->hourArrival,
            'date' => $request->date,
            'route_id' => $request->route,
            'truck_id' => $request->truck,
            'employee_id' => $request->employee

        ]);
        return redirect()->route('schedule.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('schedule.index');
    }
}
