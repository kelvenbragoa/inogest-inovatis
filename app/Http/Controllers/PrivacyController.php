<?php

namespace App\Http\Controllers;

use App\Models\PrivacyRequest;
use App\Models\UserEdc;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    //

    public function index(){
        return view('privacy.deletemydata');
    }


    public function store(Request $request){
        $data = $request->all();

        $user = UserEdc::where('email',$data['email'])->orWhere('mobile',$data['mobile'])->where('password',$data['password'])->first();

        if($user == null){
            return back()->with('messageError','Houve um erro. A credenciais inseridas não existem nos nossos registros.');
        }else{
            PrivacyRequest::create([
                'first_name'=>$data['first_name'],
                'last_name'=>$data['last_name'],
                'email'=>$data['email'],
                'mobile'=>$data['mobile'],
                'info'=>$data['info'],
                'user_id'=>$user->id
            ]);

            $user->delete();

            return back()->with('messageSuccess','A sua conta foi eliminada com sucesso.');
        }

       

        

        


    }
}
