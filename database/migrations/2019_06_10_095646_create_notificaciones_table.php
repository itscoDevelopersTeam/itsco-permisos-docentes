<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('status', ['enabled', 'disabled']);
            $table->string('destinatario', 150);
            $table->bigInteger('user_id')
                ->unsigned()
                ->comment('Usuario que genera la notificación');
            $table->bigInteger('solicitud-permiso_id')
                ->unsigned()
                ->comment('Solicitud de permiso asociada');
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
        Schema::dropIfExists('notificaciones');
    }
}
