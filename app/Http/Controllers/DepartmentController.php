<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DepartmentController extends Controller
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
        $departments = Departments::get();
        return view('admin.department.index',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        App::setLocale(auth()->user()->lang);
        return view('admin.department.create');

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
        // dd($data);
        Departments::create([
            'name' => $data['name'],
           
        ]);

        

        return back()->with('message','Success');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Departments $department)
    {
        //
        // dd($position);
        App::setLocale(auth()->user()->lang);
        return view('admin.department.edit',compact('department'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departments $department)
    {
        //
        $data = $request->all();


        $department->update(
            $data,
            );
        return back()->with('message','Success');
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
        $department = Departments::find($id);
        $employee = Employees::where('department_id', '=', $id)->first();
        if ($employee === null) {
            $department->delete();
            return back()->with('messageSuccess','Success');
         }else{
            return back()->with('messageError','Error. Department related to an Employee');
         }
        
    }
}
