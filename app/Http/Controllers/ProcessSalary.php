<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\ProcessSalary as ModelsProcessSalary;
use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProcessSalary extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        App::setLocale(auth()->user()->lang);
        $processes = ModelsProcessSalary::get();
        return view('admin.process_salary.index',compact('processes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $ref = $data['month'].'-'.date('d-m-Y');

        ModelsProcessSalary::create([
            'month' => $data['month'],
            'reference' => $ref,
            'status'=>0
        ]);

        

        return back()->with('messageSuccess','Success');
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
        App::setLocale(auth()->user()->lang);
        
        $salaries = Salary::where('process_salary_id',$id)->get();

        return view('admin.process_salary.show',compact('salaries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($process)
    {
        //

        App::setLocale(auth()->user()->lang);
        $employees = Employees::get();

        return view('admin.process_salary.edit',compact('process', 'employees'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $process = ModelsProcessSalary::find($id);
        $process->delete();
            return back()->with('messageSuccess','Success');
    }
}
