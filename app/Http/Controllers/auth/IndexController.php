<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $schedules = Schedule::get();
        $schedules = $schedules ->chunk(3); // Crear un arreglo con sub-arreglos de 3 elementos cada uno
        return view('home.index', ['categories' => $categories, 'schedules' => $schedules ]);
    }
    public function getSchedulesByCategory($id)
    {
        $categories = Category::get();
        if ($id == 0) {
            $schedules  = Schedule::get();
        } else {
            $category = Category::find($id);
            $schedules  = $category->pets;
        }
        $schedules  = $schedules ->chunk(3);
        return view('home.index', [
            'category_id' => $id,
            'categories' => $categories,
            'pets' => $schedules
        ]);
    }
}
