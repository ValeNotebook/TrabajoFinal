<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Publicaciones extends Migration
{
    
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id_publicacion();
            $table->tipo_publicacion();
            $table->fecha_publicacion();
            $table->descripcion();


        });
    
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
