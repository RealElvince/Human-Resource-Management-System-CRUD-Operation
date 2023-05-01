<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees=Employee::latest()->paginate(5);

        return view('employees.index',compact('employees'))

        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'start_date'=>'required',
           'payrollNo'=>'required',
           'employee_name'=>'required',
           'employee_email'=>'required',
           'employee_phone'=>'required',
           'id_number'=>'required',
           'department'=>'reuqired',
           'monthly_allowance'=>'required',
           'gross_salary'=>'required',
           'nssf'=>'required',
           'nhif'=>'required',
           'leave_balance'=>'required'
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index')
        ->with('success','Employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
       return view('employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
         $request->validate([]);
         
         $employee->update($request->all());

         return redirect()->route('employees.index')
         ->with('success','Employee deleted successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('emoloyees.index')
        ->with('success','Employee deleted successfully.');
    }
}
