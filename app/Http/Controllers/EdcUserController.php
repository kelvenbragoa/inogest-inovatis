<?php

namespace App\Http\Controllers;

use App\Models\EdcUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EdcUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $edcuser = EdcUser::where('datar',date('Y-m-d'))->orderBy('id','desc')->get();
        
        return view('admin.edcuser.index',compact('edcuser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.edcuser.create');
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


       

        EdcUser::create([
            "nome" => $data['nome'],
            "telefone" => $data['telefone'],
            "categoria" => $data['categoria'],
            "provincia" => $data['provincia'],
            "cidade" => $data['cidade'],
            "escolaconducao" => $data['escolaconducao'],
            "codigo" => $data['codigo'],
            "turno" => $data['turno'],
            "datar" => date('Y-m-d'),
            "colaboradoredc" => Auth::user()->id
        ]);

        return redirect()->route('edcuser.index')->with('messageSuccess', $data['telefone'].' - Obrigado pelo pagamento. O seu código de activação é: '.$data['codigo'].'.Instruções no link: www.inovatis.co.mz/procedimentos. Linha de Apoio: 850110300');


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

        $edcuser = EdcUser::find($id);
        return view('admin.edcuser.edit',compact('edcuser'));
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


    public function alluser(){
        
        $edcuser = EdcUser::orderBy('id','desc')->paginate(20);
        
        return view('admin.edcuser.all-user.index',compact('edcuser'));
    }


    public function search(Request $request){

            
            $data = $request->all();

           
            $search =$data['term'];
            /*$productsearch = EdcUser::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->where('long_description', 'LIKE', "%{$search}%")->where('status',1)->get();

            return view('product',compact('productsearch','products'));*/

            if($data['method'] == 'code'){
                
                $edcusersearch = EdcUser::where('codigo',$search)->orderBy('id','desc')->get();
                return view('admin.edcuser.search',compact('edcusersearch'));
            }
            if($data['method'] == 'mobile'){
                $edcusersearch = EdcUser::where('telefone',$search)->orderBy('id','desc')->get();
                return view('admin.edcuser.search',compact('edcusersearch'));
            }
            if($data['method'] == 'name'){
                $edcusersearch = EdcUser::where('nome',$search)->orderBy('id','desc')->get();
                return view('admin.edcuser.search',compact('edcusersearch'));
            }
    }
}
