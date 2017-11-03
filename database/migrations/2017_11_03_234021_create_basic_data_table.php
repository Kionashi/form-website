<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plate');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('expedition_place');
            $table->string('phone');
            $table->string('document');
            $table->integer('model');
            $table->enum('user_type',['INTERNAL','EXTERNAL']);
            $table->date('finalization_soat');
            $table->string('data_privacy')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->integer('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('services');
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
        Schema::dropIfExists('basic_data');
    }
}
