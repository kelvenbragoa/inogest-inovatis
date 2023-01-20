<?php

namespace App\Http\Controllers;

use App\Models\EdcUser;
use App\Models\ShiftWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShiftController extends Controller
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
        $shifts = ShiftWork::get();
        return view('admin.shift.index',compact('shifts'));
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
        $lp = EdcUser::where('categoria',1)->whereDate('datar', DB::raw('CURDATE()'))->where('colaboradoredc',Auth::user()->id)->get();
        $pro = EdcUser::where('categoria',2)->whereDate('datar', DB::raw('CURDATE()'))->where('colaboradoredc',Auth::user()->id)->get();

        return view('admin.shift.create',compact('lp','pro'));

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
        ShiftWork::create([
            'user_id' => Auth::user()->id,
            'lp'=> $data['lp'],
            'pro'=> $data['pro'],
            'shift_id' =>$data['shift_id'] ,
            'pendent' => '',

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
    public function edit(ShiftWork $shift)
    {
        //
        // dd($position);
        App::setLocale(auth()->user()->lang);
        return view('admin.shift.edit',compact('shift'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShiftWork $shift)
    {
        //
        $data = $request->all();


        $shift->update(
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
        $shift = ShiftWork::find($id);
       
            $shift->delete();
            return back()->with('messageSuccess','Success');
        
        
    }
}
