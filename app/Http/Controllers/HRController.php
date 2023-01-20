<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class HRController extends Controller
{
    //
    public function index()
    {
        //
        App::setLocale(auth()->user()->lang);
        $employees = Employees::all();
        $contract_indeterminado = Employees::where('contract_id',1)->get();
        $contract_certo = Employees::where('contract_id',2)->get();
        $contract_estagio = Employees::where('contract_id',3)->get();
        $contract_eventual = Employees::where('contract_id',4)->get();

       

     
        return view('admin.human_resource',compact('employees','contract_indeterminado','contract_certo','contract_estagio','contract_eventual'));
    }
}
