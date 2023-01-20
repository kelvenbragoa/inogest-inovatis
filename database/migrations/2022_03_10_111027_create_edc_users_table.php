<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdcUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edc_users', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('telefone')->nullable();
            $table->string('categoria')->nullable();
            $table->string('provincia')->nullable();
            $table->string('cidade')->nullable();
            $table->string('escolaconducao')->nullable();
            $table->string('codigo')->nullable();
            $table->string('melhoria')->nullable();
            $table->string('comoconheceu')->nullable();
            $table->string('colaboradoredc')->nullable();
            $table->string('turno')->nullable();
            $table->string('foraturno')->nullable();
            $table->date('datar')->nullable();
            $table->time('hora')->nullable();
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
        Schema::dropIfExists('edc_users');
    }
}
