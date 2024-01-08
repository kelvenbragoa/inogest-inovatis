<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserEdc;
use Illuminate\Http\Request;

class AuthUserController extends Controller
{
    //
    public function loginuser(Request $request){
        $data = $request->all();


        $user = UserEdc::where('email',$data['email'])->orWhere('mobile',$data['email'])->where('password',$data['password'])->first();
        if($user == null){
            return response(
                [ 'message' => 'Usuario/Password Incorretos'], 403
             );
        };

        if($user->id != 1){
            $user->pro_start_timestamp = 0;
            $user->pro_end_timestamp = 0;
            $user->lp_start_timestamp = 0;
            $user->lp_end_timestamp = 0;
        }

        return response( 
            ['user'=>$user],200
        );
   
    }

    public function registeruser(Request $request){

        $data = $request->all();

       

        $userteste = UserEdc::where('email',$data['email'])->orWhere('mobile',$data['mobile'])->first();

        if($userteste != null){
            return response(
                [ 'message' => 'Existe um usuário com estas credenciais. Inicie a sessão'],403
             );
        }else{
            $newuser = UserEdc::create([
                'first_name'=>$data['first_name'],
                'last_name'=>$data['last_name'],
                'mobile'=>$data['mobile'],
                'email'=>$data['email'],
                'password'=>$data['password'],
                'pro_start_timestamp'=>0,
                'pro_end_timestamp'=>0,
                'lp_start_timestamp'=>0,
                'lp_end_timestamp'=>0,
            ]);

            $user = UserEdc::find($newuser->id);

            return response( 
                ['user'=>$user],200
            );
        }
    }


}
