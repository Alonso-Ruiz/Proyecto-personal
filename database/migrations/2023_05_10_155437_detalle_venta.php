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
    Schema::create('detalle_venta', function (Blueprint $table) {
        $table->engine = "InnoDB";
        $table->bigIncrements('id');
        $table->unsignedBigInteger('id_categoria');
        $table->foreign('id_categoria')->references('id_categoria')->on('categoria')->onDelete('cascade');
        $table->string('nombre_producto');
        $table->string('foto');
        $table->integer('cantidad');
        $table->decimal('precio', 8, 2);
        $table->string('nombre_vendedor');
        $table->string('telefono');
        $table->date('fecha');
        $table->string('direccion');
        $table->timestamps();
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
