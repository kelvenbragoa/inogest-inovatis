<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('bi');
            $table->string('photo')->nullable();
            $table->string('filiation');
            $table->integer('marital_status_id');
            $table->string('mobile');
            $table->integer('province_id');
            $table->integer('gender_id');
            $table->integer('department_id');
            $table->integer('city_id');
            $table->string('address');
            $table->unsignedBigInteger('position_id');
            $table->date('date_birth');
            $table->string('nationality');
            $table->string('actual_degree');
            $table->integer('contract_id');
            $table->decimal('salary_base',8,2);
            $table->decimal('subsidy',8,2);
            $table->string('social_number');
            $table->date('hired_date');
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
