<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudPermisoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud-permiso', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('status', ['pass', 'not-pass']);
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_terminacion')
                ->nullable();
            $table->integer('cantidad_horas');
            $table->bigInteger('user_id')
                ->unsigned()
                ->nullable()
                ->comment('Usuario que solicita el permiso');
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
        Schema::dropIfExists('solicitud-permiso');
    }
}
