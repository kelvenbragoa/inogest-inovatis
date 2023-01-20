<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraphicBarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graphic_bars', function (Blueprint $table) {
            $table->id();
            $table->longText('edc_total_daily')->nullable();
            $table->longText('edc_total_monthly')->nullable();
            $table->longText('edc_lp_total_daily')->nullable();
            $table->longText('edc_lp_total_monthly')->nullable();
            $table->longText('edc_pro_total_daily')->nullable();
            $table->longText('edc_pro_total_monthly')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graphic_bars');
    }
}
