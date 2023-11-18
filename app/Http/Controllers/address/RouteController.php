<?php

namespace App\Http\Controllers\address;

use App\Http\Controllers\Controller;
use App\Models\Path;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $routes = Path::get();
        return view('address.indexRoute', ['routes' => $routes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Path::get();
        return view('address.CreateRoute',['types' => $types, 'route' => null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'sector' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,50',
            'neighborhoods' => 'required|regex:/^([A-Za-zÑñ\s0-9]*)$/|between:3,50',
        ]);

        Path::create([
            'sector' => $request->sector,
            'neighborhoods' => $request->neighborhoods
        ]);
        return redirect()->route('route.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Path $route)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Path $route)
    {
        return view('address.UpdateRoute', ['route' => $route]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Path $route)
    {


        $request->validate([
            'sector' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,50',
            'neighborhoods' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,50',
        ]);
        $route->update([
            'sector' => $request->sector,
            'neighborhoods' => $request->neighborhoods
        ]);
        return redirect()->route('route.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Path $route)
    {
        $route->delete();
        return redirect()->route('route.index');
    }
}
