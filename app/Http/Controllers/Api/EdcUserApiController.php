<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\EdcUserApi;
use App\Models\EdcUser;
use App\Models\UserEdc;
use Illuminate\Http\Request;

class EdcUserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response([
            'users' => EdcUserApi::get()
        ],200);
    }

    public function getreference()
    {
        $reference = EdcUserApi::orderBy('id','desc')->first();
        $string = substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(3/strlen($x)) )),1,3);
        $ref2 = $reference->id+1;
        $ref = 'INEDC'.$string.$ref2;
        return response([
            'reference'=>$ref
        ],200);
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
    public function recoverV2($phone, $code,$userid){
        /*$reference = EdcUserApi::orderBy('id','desc')->first();
        $string = substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(3/strlen($x)) )),1,3);
        $ref = 'INEDC'.$string.$reference->id+1;
        return response([
            'reference'=>$ref
        ],200);*/
        $payment = EdcUserApi::where('mobile',$phone)->where('reference',$code)->first();


        if($payment == null){

            return response([
                'message'=>'Nao existe pagamento com esta referencia',
                'code'=>0
            ],200);

        }else{

            if($payment->status == 0){

                return response([
                    'message'=>'O seu pagamento ainda nao esta ativado. Ligue a 850110300',
                    'code'=>1
                ],200);

            }else{

                

                $payment->update([
                    'status'=>0
                ]);

                $user=UserEdc::find($userid);

                if($payment->category == 'lp'){
                    $user->update([
                        'lp_start_timestamp'=>$payment->start_timestamp,
                        'lp_end_timestamp'=>$payment->end_timestamp,
                    ]);
                }
                if($payment->category == 'pro'){
                    $user->update([
                        'pro_start_timestamp'=>$payment->start_timestamp,
                        'pro_end_timestamp'=>$payment->end_timestamp,
                    ]);
                }

                return response([
                    'message'=>'Aplicativo reativado com sucesso',
                    'start'=>$payment->start_timestamp,
                    'end'=>$payment->end_timestamp,
                    'code'=>2
                ],200);

            }
        }

       

        
        
    }

        public function recover($phone, $code){
        /*$reference = EdcUserApi::orderBy('id','desc')->first();
        $string = substr(str_shuffle(str_repeat($x='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(3/strlen($x)) )),1,3);
        $ref = 'INEDC'.$string.$reference->id+1;
        return response([
            'reference'=>$ref
        ],200);*/
        $payment = EdcUserApi::where('mobile',$phone)->where('reference',$code)->first();


        if($payment == null){

            return response([
                'message'=>'Nao existe pagamento com esta referencia',
                'code'=>0
            ],200);

        }else{

            if($payment->status == 0){

                return response([
                    'message'=>'O seu pagamento ainda nao esta ativado. Ligue a 850110300',
                    'code'=>1
                ],200);

            }else{

                $payment->update([
                    'status'=>0
                ]);

                return response([
                    'message'=>'Aplicativo reativado com sucesso',
                    'start'=>$payment->start_timestamp,
                    'end'=>$payment->end_timestamp,
                    'code'=>2
                ],200);

            }
        }

       

        
        
    }
    public function storev2(Request $request)
    {
        //
        $data = $request->all();

        EdcUserApi::create([
            'reference' => $data['reference'],
            'mobile' => $data['mobile'],
            'start_timestamp' => $data['start_timestamp'],
            'end_timestamp' => $data['end_timestamp'],
            'amount' => $data['amount'],
            'category' => $data['category'],
        ]);
        
        if($data['category'] == 'lp'){
            $cat = 1;
        }
        if($data['category'] == 'pro'){
            $cat = 2;
        }

        if (time() <= strtotime("15:00:00")){
            $turno = 1;
        } else {
            $turno = 2;
        }

        EdcUser::create([
            "nome" => 'API User',
            "telefone" => $data['mobile'],
            "categoria" => $cat,
            "codigo" => $data['reference'],
            "turno" => $turno,
            "datar" => date('Y-m-d'),
            "colaboradoredc" => 10
        ]);

        $user=UserEdc::find($data['user_edc_id']);

        if($data['category'] == 'lp'){
            $user->update([
                'lp_start_timestamp'=>$data['start_timestamp'],
                'lp_end_timestamp'=>$data['end_timestamp']
            ]);
        }
        if($data['category'] == 'pro'){
            $user->update([
                'pro_start_timestamp'=>$data['start_timestamp'],
                'pro_end_timestamp'=>$data['end_timestamp']
            ]);
        }

       

        return response([
        'message' => 'sucesso',
    ], 200);
    }

    public function store(Request $request)
    {
        //
        $data = $request->all();

        EdcUserApi::create([
            'reference' => $data['reference'],
            'mobile' => $data['mobile'],
            'start_timestamp' => $data['start_timestamp'],
            'end_timestamp' => $data['end_timestamp'],
            'amount' => $data['amount'],
            'category' => $data['category'],
        ]);
        
        if($data['category'] == 'lp'){
            $cat = 1;
        }
        if($data['category'] == 'pro'){
            $cat = 2;
        }

        if (time() <= strtotime("15:00:00")){
            $turno = 1;
        } else {
            $turno = 2;
        }

        EdcUser::create([
            "nome" => 'API User',
            "telefone" => $data['mobile'],
            "categoria" => $cat,
            "codigo" => $data['reference'],
            "turno" => $turno,
            "datar" => date('Y-m-d'),
            "colaboradoredc" => 10
        ]);

        // $user=UserEdc::find($data['user_edc_id']);

        // if($data['category'] == 'lp'){
        //     $user->update([
        //         'lp_start_timestamp'=>$data['start_timestamp'],
        //         'lp_end_timestamp'=>$data['end_timestamp']
        //     ]);
        // }
        // if($data['category'] == 'pro'){
        //     $user->update([
        //         'pro_start_timestamp'=>$data['start_timestamp'],
        //         'pro_end_timestamp'=>$data['end_timestamp']
        //     ]);
        // }

       

        return response([
        'message' => 'sucesso',
    ], 200);
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
