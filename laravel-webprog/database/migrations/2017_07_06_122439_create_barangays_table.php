<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangays', function (Blueprint $table) {
            $table->increments('barangays_id');
            $table->integer('fkbarangays_municipalities')->unsigned();
            $table->text('barangay_name');
            $table->text('barangay_desc');
            $table->timestamps();
            $table->foreign('fkbarangays_municipalities')->references('municipality_id')->on('municipalities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangays');
    }
}
