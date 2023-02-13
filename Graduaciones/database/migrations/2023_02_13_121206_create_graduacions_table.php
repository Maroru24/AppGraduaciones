<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraduacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduaciones', function (Blueprint $table) {
            $table->id();
            $table->string("titulacion",50);
            $table->string("promocion",20);
            $table->unsignedBigInteger('idAdmin');
            $table->foreign('idAdmin')->references('id')->on('participantes');
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
        Schema::dropIfExists('graduaciones');
    }
}
