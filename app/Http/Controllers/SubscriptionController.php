<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class SubscriptionController extends Controller
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
        $subscription = Subscription::get();
        return view('admin.subscription.index',compact('subscription'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        App::setLocale(auth()->user()->lang);
        $config = Config::find(1);
        $subscription = Subscription::orderBy('id','desc')->first();
        $start_date = $subscription->start_date;
        $end_date = date('Y-m-d', strtotime(date('Y-m-d',strtotime($start_date)).'+ 30 day'));
      
        



        
        return view('admin.subscription.create',compact('config','start_date','end_date'));
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
        $sub = Subscription::orderBy('id','desc')->first();
        $id = $sub->id+1;
        $ref = 'INMM'.date('Ym').$id;
        $end_date = $sub->end_date;
        $actual_date = date('Y-m-d');

        $data = $request->all();
        dd($data);
        if($data['method']=='mpesa'){

            $config = \abdulmueid\mpesa\Config::loadFromFile('config.php');
            $transaction = new \abdulmueid\mpesa\Transaction($config);
            $amount=1;
            $msisdn = $data['number'];

            $reference = $ref;
            $third_party_reference = $ref;
            
            
    
            $c2b = $transaction->c2b(
                $amount,
                $msisdn,
                $reference,
                $third_party_reference
            );

            if($c2b->getCode() === 'INS-0') {

                if($end_date > $actual_date){
                    $final_date = date('Y-m-d', strtotime(date('Y-m-d',strtotime($end_date)).'+ 30 day')); 
                
                }else{
                    $final_date = date('Y-m-d', strtotime(date('Y-m-d',strtotime($actual_date)).'+ 30 day'));  
                    
                }

                Subscription::create([
                    'reference' => $ref,
                    'amount' => 5000,
                    'method' => 'mpesa',
                    'start_date' => $actual_date,
                    'end_date' => $final_date,

                ]);

                DB::table('configs')->where('id', 1 )->update(['is_active' => 1]);

                return redirect()->route('subscription.index')->with('messageSuccess', 'Success');
            }

            


        }else{

            if($end_date > $actual_date){
                $final_date = date('Y-m-d', strtotime(date('Y-m-d',strtotime($end_date)).'+ 30 day')); 
            
            }else{
                $final_date = date('Y-m-d', strtotime(date('Y-m-d',strtotime($actual_date)).'+ 30 day'));  
                
            }


            Subscription::create([
                'reference' => $data['ref'],
                'amount' => 5000,
                'method' => $data['method'],
                'start_date' => $actual_date,
                'end_date' => $final_date,

            ]);


            return redirect()->route('subscription.index')->with('messageSuccessBank', 'Success, Wait for the confirmation.');

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
