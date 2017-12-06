<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplementaryDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complementary_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('turn');
            $table->string('line');
            $table->string('cylinders');
            $table->string('bodywork');
            $table->string('bodywork_type');
            $table->integer('capacity');
            $table->string('import_declaration');
            $table->string('engine_number');
            $table->string('serial_number');
            $table->string('chassis_number');
            $table->date('import_date');
            $table->date('plate_date');
            $table->longText('observation');
            $table->string('headquarters');
            $table->string('requested_by');
            $table->string('insured');
            $table->string('intermediary');
            $table->string('main_image')->nullable();
            $table->string('secondary_image')->nullable();
            $table->integer('fuel_type_id')->unsigned();
            $table->foreign('fuel_type_id')->references('id')->on('fuel_types');
            $table->integer('color_id')->unsigned();
            $table->foreign('color_id')->references('id')->on('colors');
            $table->integer('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('vehicle_services');
            // $table->integer('brand_id')->unsigned();
            // $table->foreign('brand_id')->references('id')->on('brands');
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
        Schema::dropIfExists('complementary_data');
    }
}
