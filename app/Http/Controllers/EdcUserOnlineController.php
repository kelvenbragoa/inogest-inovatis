<?php

namespace App\Http\Controllers;

use App\Models\EdcUserApi;
use Illuminate\Http\Request;

class EdcUserOnlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $edcuseronline = EdcUserApi::orderBy('id','desc')->paginate(15);


        
        
        return view('admin.edcuseronline.index',compact('edcuseronline'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin.edcuseronline.create');
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

        $reference = EdcUserApi::orderBy('id','desc')->first();
        $string = substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(3/strlen($x)) )),1,3);
        $ref = 'INEDC'.$string.$reference->id+1;


        //$datestart = strtotime($data['start']);
        //$dateend = strtotime($data['end']);
        
        

        //$microstart = $datestart * 1000000;
       

        //$microend = $dateend * 1000000;

       
  

        EdcUserApi::create([
            'reference' => $ref,
            'mobile' => $data['mobile'],
            'start_timestamp' => $data['start'],
            'end_timestamp' => $data['end'],
            'amount' => 250,
            'category' => $data['categoria'],
        ]);

        return redirect()->route('edcuseronline.index')->with('messageSuccess', 'Alterado com sucesso');
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
    public function edit($id)
    {
        //
        $edcuseronline = EdcUserApi::find($id);
        return view('admin.edcuseronline.edit',compact('edcuseronline'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EdcUserApi $edcuseronline)
    {
        //
        $data = $request->all();


        $edcuseronline->update(
            $data,
            );

            return redirect()->route('edcuseronline.index')->with('messageSuccess', 'Alterado com sucesso');
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

    public function search(Request $request){

        $data = $request->all();

           
        $search =$data['term'];
        

        if($data['method'] == 'code'){
            
            $edcusersearch = EdcUserApi::where('reference',$search)->orderBy('id','desc')->get();
            return view('admin.edcuseronline.search',compact('edcusersearch'));
        }
        if($data['method'] == 'mobile'){
            $edcusersearch = EdcUserApi::where('mobile',$search)->orderBy('id','desc')->get();
            return view('admin.edcuseronline.search',compact('edcusersearch'));
        }
     

    }
}
