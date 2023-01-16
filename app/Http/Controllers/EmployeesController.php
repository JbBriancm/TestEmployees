<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Http\Requests\EmployeeStoretRequest;
use App\Http\Requests\EmployeeUpdatetRequest;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employees::with(['company','position'])->get();
       

        return view('employees.index', compact('employees')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return view('employees.create'); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeStoretRequest $request)
    {
    
        //
        $employe = new Employees();

        $employe->name = $request->name;
        $employe->first_name = $request->first_name;
        $employe->last_name = $request->last_name;
        $employe->start_date = $request->start_date;
        $employe->position_id = $request->position_id;
        $employe->company_id = $request->company_id;
        $employe->save();
        
        return redirect('/employees')->with('success', 'El empleado registrado con éxito.'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $employee = Employees::find($id);
        return view('employees.view',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee = Employees::find($id);
       
        return view('employees.edit', compact('employee')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeUpdatetRequest $request, $id)
    {


        $employe = Employees::find($id);
        $employe->name = $request->name;
        $employe->first_name = $request->first_name;
        $employe->last_name = $request->last_name;
        $employe->start_date = $request->start_date;
        $employe->position_id = $request->position_id;
        $employe->company_id = $request->company_id;
        $employe->save();
        
        return redirect('/employees')->with('success', 'El empleado actualizado con éxito.'); 
        
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employe = Employees::find($id);
        $employe->delete();

       return redirect('/employees')->with('success', 'El empleado se ha eliminado correctamente.'); 
        
    }
}
