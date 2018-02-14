<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('progress',['COMPLETED','PENDING']);
            $table->integer('last_step');
            $table->enum('status',['APPROVED','REJECTED']);
            $table->string('reject_reason')->nullable();
            $table->integer('service_id')->unsigned()->nullable();
            $table->foreign('service_id')->references('id')->on('services');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('basic_data_id')->unsigned()->nullable();
            $table->foreign('basic_data_id')->references('id')->on('basic_data');
            $table->integer('complementary_data_id')->unsigned()->nullable();
            $table->foreign('complementary_data_id')->references('id')->on('complementary_data');
            $table->integer('recording_id')->unsigned()->nullable();
            $table->foreign('recording_id')->references('id')->on('recording');
            $table->integer('inspection_id')->unsigned()->nullable();
            $table->foreign('inspection_id')->references('id')->on('inspections');
            $table->integer('rtc_id')->unsigned()->nullable();
            $table->foreign('rtc_id')->references('id')->on('rtc');
            
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
        Schema::dropIfExists('request');
    }
}
