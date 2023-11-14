<?php

namespace App\Http\Controllers\truck;

use App\Models\Truck;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trucks = Truck::get();
        return view('truck.indexTruck', ['trucks' => $trucks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Truck::get();
        return view('truck.TruckCreate',);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'numberRegistration' => 'required|regex:/^([A-Za-zÑñ0-9\s\-]*)$/|between:1,7',
            'capacity' => 'required|integer|between:100,500',
        ]);

        Truck::create([
            'numberRegistration' => $request->numberRegistration,
            'capacity' => $request->capacity
        ]);
        return redirect()->route('truck.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Truck $truck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Truck $truck)
    {
        return view('truck.UpdateTruck', ['truck' => $truck]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Truck $truck)
    {
        $request->validate([
            'numberRegistration' => 'required|regex:/^([A-Za-zÑñ0-9\s\-]*)$/|between:1,7',
            'capacity' => 'required|integer|between:100,500',
        ]);

        $truck->update([
            'numberRegistration' => $request->numberRegistration,
            'capacity' => $request->capacity
        ]);
        return redirect()->route('truck.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Truck $truck)
    {
        $truck->delete();
        return redirect()->route('truck.index');
    }
}
