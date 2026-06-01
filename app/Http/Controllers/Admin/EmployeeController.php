<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all employees with pagination
        $employees = Employee::with(['user.media', 'designation'])->paginate(10);

        return view('admin.employee.index', [
            'employees' => $employees,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Single Employee Information 
        $employee = Employee::with(['user.media', 'designation'])->findOrFail($id);
        // dd($employee);
        if ($employee) {
            return view('admin.employee.show', [
                'employee' => $employee,
            ]);
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Edit Employee Information 
        $employee = Employee::with(['user.media', 'designation'])->findOrFail($id);
        if ($employee) {
            return view('admin.employee.edit', [
                'employee' => $employee,
            ]);
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Update Employee Information 
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        return redirect()->route('admin.employees')->with('success', 'Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Employee Delete
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('admin.employees')->with('success', 'Employee deleted successfully');
    }
}
