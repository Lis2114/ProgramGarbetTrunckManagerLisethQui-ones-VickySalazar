<?php

namespace App\Http\Controllers\employee;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class employeeController extends Controller
{
    public function index(){
        $employees = Employee::get();
        return view('employee.indexEmployee',['employees'=> $employees]);
    }

    public function create(){
        $types = Employee::get();
        return view('employee.EmployeeCreate',['types'=> $types,'employee'=>null]);
    }

    public function store(Request $request){

        Employee::create([
            'name'=> $request->name,
            'last_name'=> $request->lastname,
            'identification'=> $request->identification,
            'type' => $request->type,
        ]);
        return redirect()->route('employee.index');
    }
    public function show($id){

    }

    public function edit($id){

    }
    public function update(Request $request, $id){

    }
    public function destroy($id){

    }
}
