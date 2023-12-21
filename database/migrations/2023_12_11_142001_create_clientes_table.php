<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_cliente');
            $table->string('dni')->nullable();
            $table->string('celular')->nullable();
            $table->string('correo')->nullable();
            $table->string('lugar_trabajo')->nullable();
            $table->string('area')->nullable();            
            $table->string('ciudad')->nullable();
            $table->string('codigo')->nullable();
            $table->string('registro')->nullable();
            $table->date('fecha_emision')->nullable();
            $table->string('horas_lectivas')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->string('tema_curso')->nullable();         
            $table->string('nota')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
