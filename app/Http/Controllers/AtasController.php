<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AtasController extends Controller
{
    //

    public function index(){

        $data = Http::get('https://inogest-atas.inovatis.co.mz/api/dashboard')->json();

       
        return view('admin.atas.index',['data'=>$data]);
    }

    public function invoice(){

        $data = Http::get('https://inogest-atas.inovatis.co.mz/api/invoice')->json();

        //circulationin

        return view('admin.atas.invoice.index',['data'=>$data['invoice']]);
    }

    public function organizacao(){

        $data = Http::get('https://inogest-atas.inovatis.co.mz/api/organization')->json();

        //circulationin

        return view('admin.atas.organization.index',['data'=>$data['organization']]);
    }
}
