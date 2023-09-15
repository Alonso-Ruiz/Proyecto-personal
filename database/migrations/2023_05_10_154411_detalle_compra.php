<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_compra', function (Blueprint $table){
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('id_detalle_compra')->unsigned();
            $table->bigInteger('id_articulo')->unsigned();
            $table->string('precio');
            $table->string('catidad');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('Foto');
            $table->timestamps();

            $table->foreign('id_detalle_compra')->references('id_compra')->on('compra')->onDelete("cascade");
            $table->foreign('id_articulo')->references('id')->on('articulo')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
