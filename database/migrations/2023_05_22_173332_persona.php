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
        Schema::create('persona', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('id_vent')->unsigned();
            $table->bigInteger('id_comp')->unsigned();
            $table->timestamps();

            $table->foreign('id_comp')->references('id_compra')->on('compra')->onDelete("cascade");
            $table->foreign('id_vent')->references('id_venta')->on('venta')->onDelete("cascade");
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
