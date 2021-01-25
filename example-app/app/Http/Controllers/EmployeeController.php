<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.table', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        return view('employees.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $employee = new Employee();
        $employee->ime = $request->input('ime');
        $employee->prezime = $request->input('prezime');
        $employee->slika = $request->input('slika');
        $employee->spol = $request->get('spol');
        $employee->godina_rodjenja = date("Y-m-d", strtotime($request->input('godina_rodjenja')));
        $employee->pocetak_rada = date("Y-m-d", strtotime($request->input('pocetak_rada')));
        $employee->vrsta_ugovora = $request->input('vrsta_ugovora');
        $employee->trajanje_ugovora = date("Y-m-d", strtotime($request->input('trajanje_ugovora')));
        $employee->odijel = $request->input('odijel');

        $employee->dan_go = $request->input('dan_go');
        $employee->dan_pd = $request->input('dan_pd');
        $employee->dan_sd = $request->input('dan_sd');

        $employee->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        $employees = Employee::all();
        return view('employees.show', ['employees'=>$employees, 'employee'=>$employee]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        $employees = Employee::all();
        return view('employees.edit', ['employees'=>$employees, 'employee'=>$employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->ime = $request->input('ime');
        $employee->prezime = $request->input('prezime');
        $employee->slika = $request->input('slika');
        $employee->spol = $request->get('spol');
        $employee->godina_rodjenja = date("Y-m-d", strtotime($request->input('godina_rodjenja')));
        $employee->pocetak_rada = date("Y-m-d", strtotime($request->input('pocetak_rada')));
        $employee->vrsta_ugovora = $request->input('vrsta_ugovora');
        $employee->trajanje_ugovora = date("Y-m-d", strtotime($request->input('trajanje_ugovora')));
        $employee->odijel = $request->input('odijel');

        $employee->dan_go = $request->input('dan_go');
        $employee->dan_pd = $request->input('dan_pd');
        $employee->dan_sd = $request->input('dan_sd');

        $employee->save();
        return redirect("employees/show/$id");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('/employees');
    }

}
