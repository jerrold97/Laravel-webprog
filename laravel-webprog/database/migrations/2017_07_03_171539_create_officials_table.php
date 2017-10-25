<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officials', function (Blueprint $table) {
            $table->increments('official_id');
            // $table->integer('fkofficial_municipality')->unsigned();
            // $table->foreign('fkofficial_municipality')->references('municipality_id')->on('municipalities');
            $table->integer('fkofficial_province')->unsigned();
            $table->foreign('fkofficial_province')->references('provinces_id')->on('provinces');
            $table->string('official_first',45);
            $table->string('official_middle',45)->nullable();;
            $table->string('official_last',45);
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
        Schema::dropIfExists('officials');
    }
}
