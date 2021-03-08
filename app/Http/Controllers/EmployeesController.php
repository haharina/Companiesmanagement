<?php

namespace App\Http\Controllers;

use App\Employees;
use App\Companies;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employees::latest()->paginate(10);
        $companies = Companies::all();
    
        return view('employees.index',compact('employees','companie','$employees'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required'
        ]);
        $employees = new Employees([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'company' => $request ->get('company'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),

        ]);
        $employees->save();
        return redirect('employees.index')->with('success', 'Employee record saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employees)
    {
        // return view('employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employees::find($id); 
        return view('employees.edit',compact('employees','companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required'
        ]);
        
        $employee = Employees::find($id);
        $employee->first_name =  $request->get('first_name');
        $employee->last_name = $request->get('last_name');
        $employee->company = $request->get('company');
        $employee->email = $request->get('email');
        $employee->phone = $request->get('phone');
 
        $employees->save();
        return redirect('/employees')->with('success', 'Employee record saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employees = Employees::find($id);
        $employees->delete();

        return redirect('/employees')->with('success', 'Employee deleted!');
    }
}
