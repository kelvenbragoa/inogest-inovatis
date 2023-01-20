<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdcUserApisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edc_user_apis', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('mobile');
            $table->bigInteger('start_timestamp');
            $table->bigInteger('end_timestamp');
            $table->decimal('amount');
            $table->string('category');
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
        Schema::dropIfExists('edc_user_apis');
    }
}
