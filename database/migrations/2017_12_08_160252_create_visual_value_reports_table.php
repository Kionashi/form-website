<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisualValueReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visual_value_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inspection_id')->unsigned();
            $table->foreign('inspection_id')->references('id')->on('inspections');
            $table->integer('visual_value_field_value_id')->unsigned();
            $table->foreign('visual_value_field_value_id')->references('id')->on('visual_value_field_values');
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
        Schema::dropIfExists('visual_value_reports');
    }
}
