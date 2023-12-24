<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso__clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cursos_id');
            $table->unsignedBigInteger('clientes_id');            
            $table->string('lugar_trabajo')->nullable();
            $table->string('area')->nullable();
            $table->string('codigo')->nullable();
            $table->string('registro')->nullable();
            $table->date('fecha_emision')->nullable();
            $table->string('nota')->nullable();
            $table->timestamps();
            $table->foreign('cursos_id')->references('id')->on('cursos')->onDelete('cascade');
            $table->foreign('clientes_id')->references('id')->on('clientes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso__clientes');
    }
}
