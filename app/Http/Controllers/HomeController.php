<?php

namespace App\Http\Controllers;

use App\Models\EdcUser;
use App\Models\Expenses;
use App\Models\GraphicBar;
use App\Models\Quotation;
use App\Models\User;
use App\Models\Price;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        App::setLocale(auth()->user()->lang);
        
        $turno_dia_lp = EdcUser::where('turno',1)->where('categoria',1)->whereDate('datar', DB::raw('CURDATE()'))->get();
        $turno_dia_pro = EdcUser::where('turno',1)->where('categoria',2)->whereDate('datar', DB::raw('CURDATE()'))->get();

        $turno_noite_lp = EdcUser::where('turno',2)->where('categoria',1)->whereDate('datar', DB::raw('CURDATE()'))->get();
        $turno_noite_pro = EdcUser::where('turno',2)->where('categoria',2)->whereDate('datar', DB::raw('CURDATE()'))->get();

        if(Auth::user()->role_id == 3){
             return view('guest.index',compact(
             'turno_dia_lp',
             'turno_dia_pro',
             'turno_noite_pro',
             'turno_noite_lp')); 
        }
      
         return view('admin.index',compact(
             'turno_dia_lp',
             'turno_dia_pro',
             'turno_noite_pro',
             'turno_noite_lp',
             ));
         /*
        $expenses = number_format(Expenses::sum('value'));
    

        $todos_usuarios_lp = EdcUser::where('categoria',1)->get();
        $todos_usuarios_pro = EdcUser::where('categoria',2)->get();
        $user_ano = EdcUser::whereYear('datar', date('Y'))->get();

        $turno_dia_user_ativo = EdcUser::where('turno',1)->whereDate('datar', DB::raw('CURDATE()'))->orderBy('id','desc')->first();
        $turno_noite_user_ativo = EdcUser::where('turno',2)->whereDate('datar', DB::raw('CURDATE()'))->orderBy('id','desc')->first();

        $turno_dia_lp = EdcUser::where('turno',1)->where('categoria',1)->whereDate('datar', DB::raw('CURDATE()'))->get();
        $turno_dia_pro = EdcUser::where('turno',1)->where('categoria',2)->whereDate('datar', DB::raw('CURDATE()'))->get();
        $turno_dia_mes = EdcUser::where('turno',1)->whereMonth('datar', date('m'))->whereYear('datar', date('Y'))->get();

        $turno_noite_lp = EdcUser::where('turno',2)->where('categoria',1)->whereDate('datar', DB::raw('CURDATE()'))->get();
        $turno_noite_pro = EdcUser::where('turno',2)->where('categoria',2)->whereDate('datar', DB::raw('CURDATE()'))->get();
        $turno_noite_mes = EdcUser::where('turno',2)->whereMonth('datar', date('m'))->whereYear('datar', date('Y'))->get();

        $user_info_dia = EdcUser::groupBy('colaboradoredc')->select('colaboradoredc', DB::raw('count(*) as total'))->where('datar',date('Y-m-d'))->where('turno',1)->get();
        $user_info_noite = EdcUser::groupBy('colaboradoredc')->select('colaboradoredc', DB::raw('count(*) as total'))->where('datar',date('Y-m-d'))->where('turno',2)->get();

        $codetotal = Voucher::get();
        $codelp = Voucher::where('category','lp')->where('status',0)->get();
        $codelpused = Voucher::where('category','lp')->where('status',1)->get();
        $codepro = Voucher::where('category','pro')->where('status',0)->get();
        $codeproused = Voucher::where('category','pro')->where('status',1)->get();
       
        $bar = GraphicBar::find(1);

        $dados_graficobarraDia = $bar->edc_total_daily;
        $dados_graficobarra = $bar->edc_total_monthly;
        $dados_graficobarraDiaLP = $bar->edc_lp_total_daily;
        $dados_graficobarraLP = $bar->edc_lp_total_monthly;
        $dados_graficobarraDiaPRO = $bar->edc_pro_total_daily;
        $dados_graficobarraPRO = $bar->edc_pro_total_monthly;
        
        $price = Price::get();

        if(Auth::user()->role_id == 3){
             return view('guest.index',compact(
             'dados_graficobarraPRO',
             'dados_graficobarraDiaPRO',
             'dados_graficobarraLP',
             'dados_graficobarraDiaLP',
             'dados_graficobarra',
             'dados_graficobarraDia',
             'user_ano',
             'todos_usuarios_pro',
             'todos_usuarios_lp',
             'turno_dia_user_ativo',
             'turno_noite_user_ativo',
             'turno_dia_mes',
             'turno_dia_lp',
             'turno_dia_pro',
             'turno_noite_mes',
             'turno_noite_lp',
             'turno_noite_pro',
            
             'expenses',
             'user_info_dia',
            'user_info_noite')); 
        }


         return view('admin.index',compact(
             'dados_graficobarraPRO',
             'dados_graficobarraDiaPRO',
             'dados_graficobarraLP',
             'dados_graficobarraDiaLP',
             'dados_graficobarra',
             'dados_graficobarraDia',
             'user_ano',
             'todos_usuarios_pro',
             'todos_usuarios_lp',
             'turno_dia_user_ativo',
             'turno_noite_user_ativo',
             'turno_dia_mes',
             'turno_dia_lp',
             'turno_dia_pro',
             'turno_noite_mes',
             'turno_noite_lp',
             'turno_noite_pro',
            
             'expenses',
             'user_info_dia',
             'user_info_noite',
             'price','codetotal','codelp','codelpused','codepro','codeproused')); */

           
    }
}
