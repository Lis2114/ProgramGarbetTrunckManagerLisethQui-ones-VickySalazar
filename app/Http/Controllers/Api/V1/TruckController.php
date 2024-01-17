<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Truck;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\TruckResource;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trucks = Truck::get();
        return TruckResource::collection($trucks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $truck = new Truck($request->all());

        $truck->save();

        return response()->json([
            'message'=> 'Los del camion han sido Guardados',
            'data'=> $truck
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Truck $truck)
    {
        return new TruckResource($truck);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Truck $truck)
    {
        $truck->update($request->all());
        return response()->json([
            'message'=> 'Los datos del camion se han actualizado',
            'data'=> $truck
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Truck $truck)
    {
        $truck->delete();
        return response()->json([
            'message'=> 'Los datos el camion han sido eliminados'
        ], Response::HTTP_ACCEPTED);
    }
}
