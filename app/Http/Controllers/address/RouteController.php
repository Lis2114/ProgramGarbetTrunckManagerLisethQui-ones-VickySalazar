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
        return view('address.indexRoute', ['routes'=>$routes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('address.RouteCraete');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'sector' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,50',
            'capacity' => 'required|integer|between:100,500',
        ]);

        Path::create([
            'sector'=> $request->sector,
            'neighborhoods'=> $request->neighborhoods
        ]);
        return redirect()->route('route.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $routes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $routes)
    {
        return view('address.UpdateAddress', ['address' => $routes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Path $path)
    {
        $request->validate([
            'sector' =>'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,50',
            'capacity' => 'required|integer|between:100,500',
        ]);

        $path->update([
            'sector'=> $request->sector,
            'neighborhoods'=> $request->neighborhoods
        ]);
        return redirect()->route('route.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Path $path)
    {
        $path->delete();
        return redirect()->route('route.index');
    }
}
