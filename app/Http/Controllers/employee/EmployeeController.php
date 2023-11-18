<?php

namespace App\Http\Controllers\employee;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class employeeController extends Controller
{
    public function index()
    {
        $employees = Employee::get();
        return view('employee.indexEmployee', ['employees' => $employees]);
    }

    public function create()
    {
        $types = Employee::get();
        return view('employee.CreateEmployee', ['types' => $types, 'employee' => null]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,50',
            'lastName' => 'required|regex:/^([A-Za-zÑñ\s]*)$/|between:3,50',
            'identification' => 'required|integer|between:1000000,1500000000',
            'type' => 'required|in:Recolector,Barrendero,Conductor'
        ]);

        Employee::create([
            'name' => $request->name,
            'lastName' => $request->lastName,
            'identification' => $request->identification,
            'type' => $request->type,

        ]);
        return redirect()->route('employee.index');
    }
    public function show(Employee $employee)
    {
    }

    public function edit(Employee $employee)
    {
        return view('employee.UpdateEmployee', ['employee' => $employee]);
    }

    public function update(Request $request, Employee $employee)
    {
        //dd($employee);
        $request->validate([
            'name' => 'required|regex:/^([A-Za-záéíóúÁÉÍÓÚÑñ\s]*)$/|between:3,50',
            'lastName' => 'required|regex:/^([A-Za-záéíóúÁÉÍÓÚÑñ\s]*)$/|between:3,50',
            'identification' => 'required|integer|between:1000000,1500000000',
            'type' => 'required|in:Recolector,Barrendero,Conductor'
        ]);

        $employee->update([
            'name' => $request->name,
            'lastName' => $request->lastName,
            'identification' => $request->identification,
            'type' => $request->type
        ]);
        return redirect()->route('employee.index');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index');
    }
}
