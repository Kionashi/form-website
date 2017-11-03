<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisualValueFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visual_value_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('visual_value_id')->unsigned();
            $table->foreign('visual_value_id')->references('id')->on('visual_values');
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
        Schema::dropIfExists('visual_value_fields');
    }
}
