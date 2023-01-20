<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDayShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_shifts', function (Blueprint $table) {
            $table->id();
            $table->Integer('user_id');
            $table->unsignedBigInteger('lp');
            $table->unsignedBigInteger('pro');
            $table->unsignedBigInteger('total');
            $table->unsignedBigInteger('shift_id');
            $table->text('obs');
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
        Schema::dropIfExists('day_shifts');
    }
}
