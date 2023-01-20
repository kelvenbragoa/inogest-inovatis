<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_number')->nullable();
            $table->string('company_flat')->nullable();
            $table->string('company_city')->nullable();
            $table->string('company_province')->nullable();
            $table->string('company_country')->nullable();
            $table->string('company_mobile')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_web')->nullable();
            $table->string('company_nuit')->nullable();
            $table->text('company_service')->nullable();
            $table->unsignedBigInteger('company_tax')->nullable();
            $table->text('company_bank_name1')->nullable();
            $table->text('company_bank_account1')->nullable();
            $table->text('company_bank_name2')->nullable();
            $table->text('company_bank_account2')->nullable();
            $table->text('company_bank_name3')->nullable();
            $table->text('company_bank_account3')->nullable();
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
        Schema::dropIfExists('configs');
    }
}
