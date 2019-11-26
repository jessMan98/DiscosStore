<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscosTable extends Migration
{
    /**
     * Run the migrations.

     * @return void
     */
    public function up()
    {
        Schema::create('discos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('discografica_id'); //relacion con discografica
            $table->string('genero');
            $table->integer('año');
            $table->string('album');
            $table->string('formato');
            $table->timestamps();

            $table->foreign('discografica_id')->references('id')->on('discograficas'); 
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discos');
    }
}
