<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use PDF;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('home',compact('employees'));
    }
    public function create()
    {
        //return dd('dfds');
        return view('AddEmployee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation ko sahi karna
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'designation' => 'required', // correct key 'designation'
            'salary' => 'required'
        ]);
    
        // Employee ko create karna
        Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'designation' => $request->designation, // correct key 'designation'
            'salary' => $request->salary,
        ]);
        return redirect()->route('employee.index')->with('status', 'Add new Employee Success');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $Employee)
    {
        Employee::find($Employee->id);
        return view('updateEmployee',compact('Employee'));
       // return dd('dfgs');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'designation' => 'required', // correct key 'designation'
            'salary' => 'required'
        ]);
      //  dd($employee->id);
        //$employee = Employee::where($employee->id)
        $employee->update([
                        'name' => $request->name,
                        'email' => $request->email,
                        'designation' => $request->designation, // correct key 'designation'
                        'salary' => $request->salary,
                    ]);
                    return redirect()->route('employee.index')->with('status', 'Employee Record Update Success');            
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employee::destroy($id);
        return redirect()->route('employee.index')->with('status','Eployee Record Delete Successfully');
    }

    
    public function pdf_demo()
    {
        return "Hello from PDF Demo"; // You can use return instead of echo for better practice
    }
    
}
