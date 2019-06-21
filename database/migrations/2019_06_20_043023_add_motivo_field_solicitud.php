<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMotivoFieldSolicitud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('solicitud-permiso', function (Blueprint $table) {
            $table->string('asunto', 150)->after('status');
            $table->text('descripcion')
                ->after('asunto')
                ->comment('Motivo por el que se solicita el permiso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solicitud-permiso', function (Blueprint $table) {
            $table->dropColumn('asunto');
            $table->dropColumn('descripcion');
        });
    }
}
