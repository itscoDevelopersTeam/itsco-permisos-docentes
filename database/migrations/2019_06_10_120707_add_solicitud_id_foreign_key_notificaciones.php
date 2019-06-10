<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSolicitudIdForeignKeyNotificaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::table('notificaciones', function (Blueprint $table) {
            $table->foreign('solicitud-permiso_id')
                ->references('id')->on('solicitud-permiso')
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
        Schema::table('notificaciones', function (Blueprint $table) {
            $table->dropForeign('notificaciones_solicitud-permiso_id_foreign');
            $table->dropColumn('solicitud-permiso_id');
        });
    }
}
