<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voucher;
use App\Models\EdcUserApi;
use App\Models\EdsUserApi;

class VoucherApiController extends Controller
{
    //
    
    public function voucher($code,$cat,$start,$end)
    {
        
        
        $payment = Voucher::where('voucher',$code)->first();


        if($payment == null){

            return response([
                'message'=>'Código de recarga Inválido',
                'code'=>0
            ],200);

        }else{

            if($payment->status == 1){

                return response([
                    'message'=>'Codigo de recarga já utilizado. Ligue a 850110300',
                    'code'=>1
                ],200);

            }else{

                if($payment->category == $cat){
                    $payment->update([
                    'status'=>1
                ]);
                
                EdcUserApi::create([
                    'reference' => $code,
                    'mobile' => '258850110300',
                    'start_timestamp' => $start,
                    'end_timestamp' => $end,
                    'amount' => 0,
                    'category' => $cat,
                ]);
                

                return response([
                    'message'=>'Aplicativo recarregado com sucesso',
                    'start'=>$payment->start_timestamp,
                    'end'=>$payment->end_timestamp,
                    'code'=>2
                ],200);
                }else{
                    return response([
                    'message'=>'Código de recarga inválido para este aplicativo. Ligue a 850110300',
                    'code'=>3
                ],200);
                }

            }
        }

 
    }
    
    public function vouchereds($code,$cat,$start,$end){
        
        
        $payment = Voucher::where('category','eds')->where('voucher',$code)->first();


        if($payment == null){

            return response([
                'message'=>'Código de recarga Inválido',
                'code'=>0
            ],200);

        }else{

            if($payment->status == 1){

                return response([
                    'message'=>'Codigo de recarga já utilizado. Ligue a 850110300',
                    'code'=>1
                ],200);

            }else{

                if($payment->category == 'eds'){
                    $payment->update([
                    'status'=>1
                ]);
                
                EdsUserApi::create([
                    'reference' => $code,
                    'mobile' => '258850110300',
                    'start_timestamp' => $start,
                    'end_timestamp' => $end,
                    'amount' => 0,
                    'category' => 'eds',
                ]);
                
               
                

                return response([
                    'message'=>'Aplicativo recarregado com sucesso',
                    'start'=>$payment->start_timestamp,
                    'end'=>$payment->end_timestamp,
                    'code'=>2
                ],200);
                }else{
                    return response([
                    'message'=>'Código de recarga inválido para este aplicativo. Ligue a 850110300',
                    'code'=>3
                ],200);
                }

            }
        }

 
    }
}
