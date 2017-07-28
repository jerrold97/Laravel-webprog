<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->increments('municipality_id');
            $table->integer('fkmunicipality_provinces')->unsigned();;
            $table->foreign('fkmunicipality_provinces')->references('provinces_id')->on('provinces');
            $table->text('municipality');
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
        Schema::table('municipalities', function(Blueprint $table) {
            $table->dropForeign(['fkmunicipality_provinces']);
        });
        Schema::dropIfExists('municipalities');
    }
}
