<?php

namespace App\Http\Controllers;

use App\Models\EdcUser;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.reports.index');
    }


    public function report(Request $request){

            $data = $request->all();

            $dataInicialtimestamp = strtotime($data['start']);
            $dataFinaltimestamp = strtotime($data['end']);

            $diaInicio = date('d',$dataInicialtimestamp);
            $mesInicio = date('m',$dataInicialtimestamp);
            $anoInicio = date('Y',$dataInicialtimestamp);

            $diaFinal = date('d',$dataFinaltimestamp);
            $mesFinal = date('m',$dataFinaltimestamp);
            $anoFinal = date('Y',$dataFinaltimestamp);

            $anoD = date('Y');
            $mesD = date('M');
            $dados_graficobarraDia = array();
            for ($xD = $diaInicio; $xD <= $diaFinal; $xD++) {

            $row =     EdcUser::whereDay('datar',$xD)->whereMonth('datar',$$mesInicio)->whereYear('datar',$anoInicio)->get();
           
             array_push($dados_graficobarraDia,$row);
           
            }


            $d1 = 0;
            $d2 = 0;
            $d3 = 0;

            $c1 = 80;
            $c2 = 100;
            $c3 = 150;

            $m1 = 200;
            $m2 = 250;
            $m3 = 300;

            foreach($dados_graficobarraDia as $dado_graficobarraDia)
                if ($dado_graficobarraDia>=$c1 && $dado_graficobarraDia<$c2) $d1++;

            foreach($dados_graficobarraDia as $dado_graficobarraDia)
            if ($dado_graficobarraDia>=$c2 && $dado_graficobarraDia<$c3) $d2++;

            foreach($dados_graficobarraDia as $dado_graficobarraDia)
            if ($dado_graficobarraDia>=$c3) $d3++;


                                        
            $meta = $m1*$d1 + $m2*$d2 + $m3*$d3;

            dd($meta, $d1,$d2,$d3);

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
    public function store(Request $request)
    {
        //
        $data = $request->all();

            $dataInicialtimestamp = strtotime($data['start']);
            $dataFinaltimestamp = strtotime($data['end']);

            $datastart = date('d-m-Y', strtotime($data['start'])); 
            $dataend =  date('d-m-Y', strtotime($data['end'])); ;

            

            $diaInicio = date('d',$dataInicialtimestamp);
            $mesInicio = date('m',$dataInicialtimestamp);
            $anoInicio = date('Y',$dataInicialtimestamp);

            $diaFinal = date('d',$dataFinaltimestamp);
            $mesFinal = date('m',$dataFinaltimestamp);
            $anoFinal = date('Y',$dataFinaltimestamp);

            $anoD = date('Y');
            $mesD = date('M');

            $total = EdcUser::whereDate('datar','>=',$data['start'])->whereDate('datar','<=',$data['end'])->get();
            $totalLp = EdcUser::whereDate('datar','>=',$data['start'])->whereDate('datar','<=',$data['end'])->where('categoria',1)->get();
            $totalPro = EdcUser::whereDate('datar','>=',$data['start'])->whereDate('datar','<=',$data['end'])->where('categoria',2)->get();

            // dd(count($total));
            $dados_graficobarraDia = array();
            for ($xD = $diaInicio; $xD <= $diaFinal; $xD++) {

            $row =     EdcUser::whereDay('datar',$xD)->whereMonth('datar',$mesInicio)->whereYear('datar',$anoInicio)->get();
           
             array_push($dados_graficobarraDia,count($row));
           
            }


            $d1 = 0;
            $d2 = 0;
            $d3 = 0;

            $c1 = 80;
            $c2 = 100;
            $c3 = 150;

            $m1 = 200;
            $m2 = 250;
            $m3 = 300;

            

            foreach($dados_graficobarraDia as $dado_graficobarraDia)
                if ($dado_graficobarraDia>=$c1 && $dado_graficobarraDia<$c2) $d1++;

            foreach($dados_graficobarraDia as $dado_graficobarraDia)
            if ($dado_graficobarraDia>=$c2 && $dado_graficobarraDia<$c3) $d2++;

            foreach($dados_graficobarraDia as $dado_graficobarraDia)
            if ($dado_graficobarraDia>=$c3) $d3++;


                                        
            $meta = $m1*$d1 + $m2*$d2 + $m3*$d3;

            


            return view('admin.reports.show',compact('meta','d1','d2','d3','total','totalLp','totalPro', 'datastart','dataend'));
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
