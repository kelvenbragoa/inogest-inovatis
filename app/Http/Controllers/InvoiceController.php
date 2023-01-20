<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Invoice;
use App\Models\Quotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use PDF;
class InvoiceController extends Controller
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
        $invoice = Invoice::get();
        return view('admin.invoice.index', compact('invoice'));
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
        
        Invoice::create($data);
        DB::table('quotations')->where('id', $data['quotation_id'] )->update(['status' => 1]);

        return redirect()->route('invoice.index')->with('messageSuccess', 'Success');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
        App::setLocale(auth()->user()->lang);
        $config = Config::find(1);
        $pdf = PDF::loadView('admin.invoice.show', compact('invoice','config'));

        return $pdf->setPaper('a4')->stream('invoice.pdf');
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


    public function searchinvoice(Request $request){
        App::setLocale(auth()->user()->lang);
        $data = $request->all();

        

        $quotation = Quotation::where('customer_id',$data['costumer_id'])->where('status',0)->get();



        return view('admin.invoice.create',compact('quotation'));
    }
}
