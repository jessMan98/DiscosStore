<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscoFamosoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disco_famoso', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('disco_id');
            $table->unsignedBigInteger('famoso_id');
            $table->timestamps();

            $table->foreign('disco_id')
                  ->references('id')
                  ->on('discos')
                  ->onDelete('cascade');

            $table->foreign('famoso_id')
                  ->references('id')
                  ->on('famosos')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disco_famoso');
    }
}

