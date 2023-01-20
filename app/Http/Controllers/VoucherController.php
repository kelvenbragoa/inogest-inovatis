<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class VoucherController extends Controller
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
       
        $voucher = Voucher::where('category','lp')->orWhere('category','pro')->orderBy('id','desc')->get();
        return view('admin.voucher.index', compact('voucher'));
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

        if($data['app'] == 'edc'){

        $lp = $data['lp'];
        $pro = $data['pro'];
        


        
        if($lp > 0 ){
            for ($i=0; $i < $lp ; $i++) { 
                $voucherlp = Voucher::orderBy('id','desc')->first();
                $stringlp = substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(3/strlen($x)) )),1,6);
                $voucherfinallp = $stringlp.$voucherlp->id+1;

                Voucher::create([
                    'voucher' => $voucherfinallp,
                    'status' => 0,
                    'category' => 'lp',
                    'customer' => $data['customer'],
                ]);
        
                
            }
        }
        if ($pro > 0 ){
            for ($i=0; $i < $pro ; $i++) { 
                $voucherpro = Voucher::orderBy('id','desc')->first();
                $stringpro = substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(3/strlen($x)) )),1,6);
                $voucherfinalpro = $stringpro.$voucherpro->id+1;

                Voucher::create([
                    'voucher' => $voucherfinalpro,
                    'status' => 0,
                    'category' => 'pro',
                    'customer' => $data['customer'],
                ]);
            }
        }
        return redirect()->route('voucher.index')->with('messageSuccess', 'Recargas adicionadas com sucesso');
        }

        if($data['app'] == 'eds'){

            $eds = $data['eds'];
            for ($i=0; $i < $eds ; $i++) { 
                $vouchereds = Voucher::orderBy('id','desc')->first();
                $stringeds = substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(3/strlen($x)) )),1,6);
                $voucherfinaleds = $stringeds.$vouchereds->id+1;

                Voucher::create([
                    'voucher' => $voucherfinaleds,
                    'status' => 0,
                    'category' => 'eds',
                    'customer' => $data['customer'],
                ]);
        
                
            }

            return redirect()->route('vouchereds.index')->with('messageSuccess', 'Recargas adicionadas com sucesso');
        }
        


        
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
