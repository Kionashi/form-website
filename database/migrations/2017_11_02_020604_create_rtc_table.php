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
            $table->string('engine_file')->nullable();
            $table->string('serial_file')->nullable();
            $table->string('chassis_file')->nullable();
            $table->string('security_number')->nullable();
            $table->string('front_card')->nullable();
            $table->string('back_card')->nullable();
            $table->string ('radication_number');
            $table->string ('form_number');
            $table->string('review_data');
            $table->string('reason');
            $table->string('line1');
            $table->string('line2');
            $table->string('line3');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->integer('vehicle_class_id')->unsigned();
            $table->foreign('vehicle_class_id')->references('id')->on('vehicle_classes');
            $table->integer('inspector_id')->unsigned();
            $table->foreign('inspector_id')->references('id')->on('users');
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
