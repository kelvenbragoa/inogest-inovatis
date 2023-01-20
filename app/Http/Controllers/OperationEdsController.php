<?php

namespace App\Http\Controllers;

use App\Models\EdsUserApi;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class OperationEdsController extends Controller
{
    //
    public function index()
    {
        //
        App::setLocale(auth()->user()->lang);
       
        
        $bioTotal = count(EdsUserApi::where('category','bio')->get());
        $geoTotal = count(EdsUserApi::where('category','geo')->get());
        $filoTotal = count(EdsUserApi::where('category','filo')->get());
        $histTotal = count(EdsUserApi::where('category','hist')->get());
        $ingTotal = count(EdsUserApi::where('category','ing')->get());
        $matTotal = count(EdsUserApi::where('category','mat')->get());
        $desTotal = count(EdsUserApi::where('category','des')->get());
        $quiTotal = count(EdsUserApi::where('category','qui')->get());
        $fisTotal = count(EdsUserApi::where('category','fis')->get());
        $fraTotal = count(EdsUserApi::where('category','fra')->get());
        $portTotal = count(EdsUserApi::where('category','port')->get());


        $bioMes = count(EdsUserApi::where('category','bio')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $geoMes = count(EdsUserApi::where('category','geo')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $filoMes = count(EdsUserApi::where('category','filo')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $histMes = count(EdsUserApi::where('category','hist')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $ingMes = count(EdsUserApi::where('category','ing')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $matMes = count(EdsUserApi::where('category','mat')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $desMes = count(EdsUserApi::where('category','des')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $quiMes = count(EdsUserApi::where('category','qui')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $fisMes = count(EdsUserApi::where('category','fis')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $fraMes = count(EdsUserApi::where('category','fra')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $portMes = count(EdsUserApi::where('category','port')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());

        $bioDia = count(EdsUserApi::where('category','bio')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $geoDia = count(EdsUserApi::where('category','geo')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $filoDia = count(EdsUserApi::where('category','filo')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $histDia = count(EdsUserApi::where('category','hist')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $ingDia = count(EdsUserApi::where('category','ing')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $matDia = count(EdsUserApi::where('category','mat')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $desDia = count(EdsUserApi::where('category','des')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $quiDia = count(EdsUserApi::where('category','qui')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $fisDia = count(EdsUserApi::where('category','fis')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $fraDia = count(EdsUserApi::where('category','fra')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $portDia = count(EdsUserApi::where('category','port')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        
        
        
        
        //10 classe
        $bioTotal10 = count(EdsUserApi::where('category','bio10')->get());
        $geoTotal10 = count(EdsUserApi::where('category','geo10')->get());
        $filoTotal10 = count(EdsUserApi::where('category','filo10')->get());
        $histTotal10 = count(EdsUserApi::where('category','hist10')->get());
        $ingTotal10 = count(EdsUserApi::where('category','ing10')->get());
        $matTotal10 = count(EdsUserApi::where('category','mat10')->get());
        $desTotal10 = count(EdsUserApi::where('category','des10')->get());
        $quiTotal10 = count(EdsUserApi::where('category','qui10')->get());
        $fisTotal10 = count(EdsUserApi::where('category','fis10')->get());
        $fraTotal10 = count(EdsUserApi::where('category','fra10')->get());
        $portTotal10 = count(EdsUserApi::where('category','port10')->get());


        $bioMes10 = count(EdsUserApi::where('category','bio10')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $geoMes10 = count(EdsUserApi::where('category','geo10')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $filoMes10 = count(EdsUserApi::where('category','filo10')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $histMes10 = count(EdsUserApi::where('category','hist10')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $ingMes10 = count(EdsUserApi::where('category','ing10')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $matMes10 = count(EdsUserApi::where('category','mat10')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $desMes10 = count(EdsUserApi::where('category','des10')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $quiMes10 = count(EdsUserApi::where('category','qui10')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $fisMes10 = count(EdsUserApi::where('category','fis10')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $fraMes10 = count(EdsUserApi::where('category','fra10')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());
        $portMes10 = count(EdsUserApi::where('category','port10')->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get());


        $bioDia10 = count(EdsUserApi::where('category','bio10')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $geoDia10 = count(EdsUserApi::where('category','geo10')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $filoDia10 = count(EdsUserApi::where('category','filo10')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $histDia10 = count(EdsUserApi::where('category','hist10')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $ingDia10 = count(EdsUserApi::where('category','ing10')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $matDia10 = count(EdsUserApi::where('category','mat10')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $desDia10 = count(EdsUserApi::where('category','des10')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $quiDia10 = count(EdsUserApi::where('category','qui10')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $fisDia10 = count(EdsUserApi::where('category','fis10')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $fraDia10 = count(EdsUserApi::where('category','fra10')->whereDate('created_at', DB::raw('CURDATE()'))->get());
        $portDia10 = count(EdsUserApi::where('category','port10')->whereDate('created_at', DB::raw('CURDATE()'))->get());

       

     
        return view('admin.operationeds',compact(
            'bioTotal',
            'geoTotal',
            'filoTotal',
            'histTotal',
            'ingTotal',
            'matTotal',
            'desTotal',
            'quiTotal',
            'fisTotal',
            'fraTotal',
            'portTotal',
            'bioDia',
            'geoDia',
            'filoDia',
            'histDia',
            'ingDia',
            'matDia',
            'desDia',
            'quiDia',
            'fisDia',
            'fraDia',
            'portDia',
            'bioMes',
            'geoMes',
            'filoMes',
            'histMes',
            'ingMes',
            'matMes',
            'desMes',
            'quiMes',
            'fisMes',
            'fraMes',
            'portMes',
            'bioTotal10',
            'geoTotal10',
            'filoTotal10',
            'histTotal10',
            'ingTotal10',
            'matTotal10',
            'desTotal10',
            'quiTotal10',
            'fisTotal10',
            'fraTotal10',
            'portTotal10',
            'bioDia10',
            'geoDia10',
            'filoDia10',
            'histDia10',
            'ingDia10',
            'matDia10',
            'desDia10',
            'quiDia10',
            'fisDia10',
            'fraDia10',
            'portDia10',
            'bioMes10',
            'geoMes10',
            'filoMes10',
            'histMes10',
            'ingMes10',
            'matMes10',
            'desMes10',
            'quiMes10',
            'fisMes10',
            'fraMes10',
            'portMes10'
        ));
    }
}
