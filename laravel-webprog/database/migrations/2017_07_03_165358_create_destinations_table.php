<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->increments('destinations_id');
            $table->integer('fkdestination_barangays')->unsigned();
            // $table->integer('fkdestination_municipalities')->unsigned();
            // $table->integer('fkdestination_provinces')->unsigned();
            $table->string('dname',45);
            $table->string('dlocation',45);
            $table->string('ddesc',45);
    
            $table->foreign('fkdestination_barangays')->references('barangays_id')->on('barangays');
            // $table->foreign('fkdestination_municipalities')->references('municipality_id')->on('municipalities');
            // $table->foreign('fkdestination_provinces')->references('provinces_id')->on('provinces');
            
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
        Schema::dropIfExists('destinations');
    }
}
