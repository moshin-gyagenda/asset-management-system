<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all(); // Fetch all departments from the database

        return view('dashboard.department-list', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create-department');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validate the form data
         $validatedData = $request->validate([
            'department_name' => 'required|string',
            'department_code' => 'required|string',
            'department_head' => 'required|string',
            'description' => 'required|string',
        ]);

        // Create a new department instance
        $department = new Department;
        $department->department_name = $validatedData['department_name'];
        $department->department_code = $validatedData['department_code'];
        $department->department_head = $validatedData['department_head'];
        $department->description = $validatedData['description'];

        // Check if the department was saved successfully
        if ($department->save()) {
            // Redirect with success message
            return redirect()->back()->with('success', 'Department created successfully');
        } else {
            // Redirect with error message or handle the error in another way
            return redirect()->back()->with('error', 'Failed to create department');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        //
    }
}
