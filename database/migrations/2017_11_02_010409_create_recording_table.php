<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recording', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('plate');
            // $table->string('bodywork_type');
            // $table->integer('model');
            // $table->string('line');
            // $table->string('series');
            // $table->string('engine');
            // $table->string('chassis');
            $table->string('re_recorded_part');
            // $table->string('original_color');
            // $table->string('new_color');
            $table->string('review_city');
            $table->string('city');
            $table->string('secretary_expedition');
            $table->string('description');
            $table->string('notes');
            $table->integer('class_id')->unsigned();
            $table->foreign('class_id')->references('id')->on('classes');
            // $table->integer('brand_id')->unsigned();
            // $table->foreign('brand_id')->references('id')->on('brands');
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
        Schema::dropIfExists('recording');
    }
}
