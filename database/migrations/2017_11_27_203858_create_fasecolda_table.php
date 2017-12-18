<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasecoldaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasecolda', function (Blueprint $table) {
            // ID
            $table->increments('id');
            
            // Fields
            $table->string('code');
            // Foreing keys
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->integer('first_reference_id')->unsigned();
            $table->foreign('first_reference_id')->references('id')->on('references');
            $table->integer('second_reference_id')->unsigned();
            $table->foreign('second_reference_id')->references('id')->on('references');
            $table->integer('fuel_type_id')->unsigned();
            $table->foreign('fuel_type_id')->references('id')->on('fuel_types');
            $table->integer('vehicle_service_id')->unsigned();
            $table->foreign('vehicle_service_id')->references('id')->on('vehicle_services');
            $table->integer('cylinder_id')->unsigned();
            $table->foreign('cylinder_id')->references('id')->on('cylinders');
            $table->integer('vehicle_class_id')->unsigned();
            $table->foreign('vehicle_class_id')->references('id')->on('vehicle_classes');
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
        Schema::dropIfExists('fasecolda');
    }
}
