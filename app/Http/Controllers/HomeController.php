<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with('route')->get();
        return view('home.Index', ['schedules' => $schedules]);
    }


}
