<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasecoldaYearsValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasecolda_years_values', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('year');
            $table->integer('value');
            
            //Foreign keys
            $table->integer('fasecolda_id')->unsigned();
            $table->foreign('fasecolda_id')->references('id')->on('fasecolda');
            
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
        Schema::dropIfExists('fasecolda_years_values');
    }
}
