<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Employees;
use App\Models\Salary as ModelsSalary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use PDF;


class Salary extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        

        $employess = Employees::get();

        for ($i=0; $i < count($employess) ; $i++) { 
           ModelsSalary::create([
            'process_salary_id' => $data['id_process'],
            'employee_id' => $employess[$i]['id'], 
        ]);
        }

        DB::table('process_salaries')->where('id', $data['id_process'] )->update(['status' => 1]);

        return redirect()->route('process_salary.index')->with('messageSuccess', 'Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsSalary $salary)
    {
        //
        App::setLocale(auth()->user()->lang);
        $config = Config::find(1);
        $pdf = PDF::loadView('admin.salary.show', compact('salary','config'));

        return $pdf->setPaper('a4')->stream('salary.pdf');
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
    }
}
