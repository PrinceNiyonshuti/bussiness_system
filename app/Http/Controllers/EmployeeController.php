<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.employee.index', ['employees' => Employee::latest()->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee;
        $employee->company_id = $request['company_id'];
        $employee->name = $request['name'];
        $employee->surname = $request['surname'];
        $employee->email = $request['email'];
        $employee->telephone = $request['telephone'];
        $employee->emp_start_date = $request['emp_start_date'];
        $employee['emp_number'] = Str::random(7);
        $employee->save();
        return redirect('/employee')->with('success', 'Employee created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('admin.employee.edit', [
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $existingEmployee = Employee::find($id);
        if ($existingEmployee) {
            $existingEmployee->company_id = $request['company_id'];
            $existingEmployee->name = $request['name'];
            $existingEmployee->surname = $request['surname'];
            $existingEmployee->email = $request['email'];
            $existingEmployee->telephone = $request['telephone'];
            $existingEmployee->emp_start_date = $request['emp_start_date'];
            $existingEmployee->save();
        }
        return redirect('/employee')->with('success', 'Employee updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return back()->with('success', 'Employee Deleted successfully!');
    }
}
