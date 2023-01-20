<?php

namespace App\Console\Commands;

use App\Models\EdcUser;
use App\Models\GraphicBar;
use Illuminate\Console\Command;

class HourlyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the graphic bar info of dashboard';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //GRAFICO GERAL
        $dados_graficobarraDia = '';

        for ($xD = 1; $xD <= 31; $xD++) {
            $usuariosedc1 = EdcUser::whereDay('datar',$xD)->whereMonth('datar',date('m'))->whereYear('datar',date('Y'))->get();
            $nr1 = count( $usuariosedc1);
            $dados_graficobarraDia.="{$nr1},";
        }

        $dados_graficobarra = '';
        for ($x = 1; $x <= 12; $x++) {
            $usuariosedc2 = EdcUser::whereMonth('datar',$x)->whereYear('datar',date('Y'))->get();
            $nr2 = count( $usuariosedc2);
            $dados_graficobarra.="{$nr2},";
        }


        //GRAFICO LP

        $dados_graficobarraDiaLP = '';

        for ($xD = 1; $xD <= 31; $xD++) {
            $usuariosedc3 = EdcUser::where('categoria',1)->whereDay('datar',$xD)->whereMonth('datar',date('m'))->whereYear('datar',date('Y'))->get();
            $nr3 = count( $usuariosedc3);
            $dados_graficobarraDiaLP.="{$nr3},";
        }

        $dados_graficobarraLP = '';
        for ($x = 1; $x <= 12; $x++) {
            $usuariosedc4 = EdcUser::where('categoria',1)->whereMonth('datar',$x)->whereYear('datar',date('Y'))->get();
            $nr4 = count( $usuariosedc4);
            $dados_graficobarraLP.="{$nr4},";
        }


        //GRAFICO PRO

        $dados_graficobarraDiaPRO = '';

        for ($xD = 1; $xD <= 31; $xD++) {
            $usuariosedc5 = EdcUser::where('categoria',2)->whereDay('datar',$xD)->whereMonth('datar',date('m'))->whereYear('datar',date('Y'))->get();
            $nr5 = count( $usuariosedc5);
            $dados_graficobarraDiaPRO.="{$nr5},";
        }

        $dados_graficobarraPRO = '';
        for ($x = 1; $x <= 12; $x++) {
            $usuariosedc6 = EdcUser::where('categoria',2)->whereMonth('datar',$x)->whereYear('datar',date('Y'))->get();
            $nr6 = count( $usuariosedc6);
            $dados_graficobarraPRO.="{$nr6},";
        }

        $graphic = GraphicBar::find(1);
        
        $graphic->update([
            'edc_total_daily'=> $dados_graficobarraDia,
            'edc_total_monthly'=> $dados_graficobarra,
            'edc_lp_total_daily'=>$dados_graficobarraDiaLP,
            'edc_lp_total_monthly'=> $dados_graficobarraLP,
            'edc_pro_total_daily'=>$dados_graficobarraDiaPRO,
            'edc_pro_total_monthly'=> $dados_graficobarraPRO,

        ]);

    }
}
