<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMcscrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcscrs', function (Blueprint $table) {
            $table->id();
            $table->longText('motivo');
            $table->longText('causa');
            $table->longText('solucao');
            $table->longText('consequencia');
            $table->longText('recomendacao');
            $table->unsignedBigInteger('invoice_id')->nullable();
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
        Schema::dropIfExists('mcscrs');
    }
}
