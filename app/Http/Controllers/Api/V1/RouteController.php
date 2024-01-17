<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\RouteResource;
use App\Models\Path;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paths = Path::get();
        return RouteResource::collection($paths);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = new Path($request->all());

        $path->save();

        return response()->json([
            'message'=> 'Los datos de la ruta han sido Guardados',
            'data'=> $path
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Path $path)
    {
        return new RouteResource($path);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Path $path)
    {
        $path->update($request->all());
        return response()->json([
            'message'=> 'Los datos de la ruta se han actualizado',
            'data'=> $path
        ], Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Path $path)
    {
        $path->delete();
        return response()->json([
            'message'=> 'Los datos de el horario han sido eliminados'
        ], Response::HTTP_ACCEPTED);
    }
}
