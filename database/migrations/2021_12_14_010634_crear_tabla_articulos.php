<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaArticulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->date("fecha_adquisicion");
            $table->string("codigo", 255);
            $table->string("numero_folio_comprobante", 255)->nullable();
            $table->string("descripcion", 255);
            $table->string("marca", 255);
            $table->string("modelo", 255);
            $table->string("serie", 255);
            $table->string("estado", 255);
            $table->string("observaciones", 255)->nullable();
            $table->unsignedDecimal("costo_adquisicion", 10, 2);
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
        Schema::dropIfExists('articulos');
   
    }
}
