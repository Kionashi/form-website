<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controls', function (Blueprint $table) {
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
        Schema::dropIfExists('controls');
    }
}
