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
            $table->engine = 'InnoDB';
            $table->increments('barangays_id');
            $table->integer('fkbarangays_municipalities')->unsigned();
            $table->foreign('fkbarangays_municipalities')->references('municipality_id')->on('municipalities');
            $table->text('barangay_name');
            $table->text('barangay_desc');
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
        Schema::dropIfExists('barangays');
    }
}
