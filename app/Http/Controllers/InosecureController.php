<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InosecureController extends Controller
{
    //
    public function index(){

        $data = Http::get('https://inosecure.inovatis.co.mz/api/dashboard')->json();

       
        return view('admin.inosecure.index',['data'=>$data]);
    }


    public function userin(){

        $data = Http::get('https://inosecure.inovatis.co.mz/api/circulationin')->json();

        //circulationin
       
        return view('admin.inosecure.user.entrada',['data'=>$data['circulationin']]);
    }

    public function userout(){

        $data = Http::get('https://inosecure.inovatis.co.mz/api/circulationout')->json();

        //circulationout

        return view('admin.inosecure.user.saida',['data'=>$data['circulationout']]);
    }

    public function guestin(){

        $data = Http::get('https://inosecure.inovatis.co.mz/api/circulationinguest')->json();
        //circulationinguest
       
        return view('admin.inosecure.guest.entrada',['data'=>$data['circulationinguest']]);
    }

    public function guestout(){

        $data = Http::get('https://inosecure.inovatis.co.mz/api/circulationoutguest')->json();
        //circulationoutguest
       
        return view('admin.inosecure.guest.saida',['data'=>$data['circulationoutguest']]);
    }
}
