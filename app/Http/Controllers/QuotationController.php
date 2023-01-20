<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Costumers;
use App\Models\ItemQuotation;
use App\Models\Quotation;
use App\Models\User;
use App\Notifications\QuotationNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Notification;
use PDF;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        // $quotations = Quotation::where('status',0)->get();
        App::setLocale(auth()->user()->lang);
        $quotations = Quotation::get();
        return view('admin.quotation.index', compact('quotations'));
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
        return view('admin.quotation.create');
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
        $user = User::all();
        $data = $request->all();
        $item = $request->item;
        $qtd = $request->qtd;
        $preco = $request->preco;
        
       $quotation = Quotation::create([
        'customer_id' => $data['costumer_id'],
        'representative' => $data['representative'],
        'service' => $data['service'],
        'obs' => $data['obs'],
        'status' => 0
       ]);

       $costumer = Costumers::find($data['costumer_id']);

       
        
        for ($i=0; $i < count($item); $i++) { 
            ItemQuotation::create([
                'quotation_id' => $quotation->id,
                'name' => $item[$i],
                'quatity' => $qtd[$i],
                'price' => $preco[$i],
            ]);
        }
        // dd($item[0],$qtd[0],$preco[0],$item[1],$qtd[1],$preco[1],$item[2],$qtd[2],$preco[2],$item[3],$qtd[3],$preco[3]);
        $msg = "New quotation added for ".$costumer->name." for ".$data['service'];

        Notification::send($user,new QuotationNotification($msg));

        return back()->with('messageSuccess','Success');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Quotation $quotation)
    {
        //
        App::setLocale(auth()->user()->lang);
        $config = Config::find(1);
        $pdf = PDF::loadView('admin.quotation.show', compact('quotation','config'));

        return $pdf->setPaper('a4')->stream('quotation.pdf');
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
