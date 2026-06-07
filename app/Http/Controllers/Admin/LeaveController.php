<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\LeaveType;
use App\Models\Leave;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leaves = Leave::with(['employee.user', 'leave_type'])->paginate(10);
        return view('admin.leaves.index', compact('leaves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Get all employees with their users
        $employees = Employee::with('user')->get();

        // Leave Type
        $leave_types = LeaveType::all();

        return view('admin.leaves.create', compact('employees', 'leave_types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $employee_id = $request->employee_id;
        $leave_type = $request->leave_type;
        $status = $request->status;
        $duration = $request->duration;
        $duration_dates = $request->duration_dates;
        $reason = $request->reason;

        $leave = new Leave();
        $leave->employee_id = $employee_id;
        $leave->leave_id = $leave_type;
        $leave->status = $status;
        $leave->duration = $duration;
        $leave->duration_dates = $duration_dates;
        $leave->reason = $reason;
        $leave->save();

        return redirect()->route('admin.leaves')->with('success', 'Leave assigned successfully');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
