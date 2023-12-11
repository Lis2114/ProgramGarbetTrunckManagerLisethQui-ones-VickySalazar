<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
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
        $routes = Path::get();
        return $routes;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = new Path();
        //dd($request);
        $path-> sector = $request->input ('sector');
        $path->neighborhoods= $request->input('neighborhoods');


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
        //return new
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Path $path)
    {
        $path->update($request->all());
        return response()->json([
            'message'=> 'Los datos de la rutas  se han actualizado',
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
            'message'=> 'Los datos de la rutas han sido eliminados'
        ], Response::HTTP_ACCEPTED);
    }
}
