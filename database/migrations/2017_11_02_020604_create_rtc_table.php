<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRtcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rtc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plate');
            $table->integer('radication_number');
            $table->string('color');
            $table->string('line1');
            $table->string('line2');
            $table->string('line3');
            $table->string('engine');
            $table->string('chassis');
            $table->string('car_type');
            $table->integer('model');
            $table->string('reason');
            $table->string('new_color');
            $table->string('platelet_series')->nullable();
            $table->string('engine_number')->nullable();
            $table->string('chassis_number')->nullable();
            $table->string('security_number')->nullable();
            $table->string('front_card')->nullable();
            $table->string('back_card')->nullable();
            $table->integer('inspector_id')->unsigned();
            $table->foreign('inspector_id')->references('id')->on('users');
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes');
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');
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
        Schema::dropIfExists('rtc');
    }
}
