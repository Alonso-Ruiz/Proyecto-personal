<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->bigIncrements('id_categoria');
            $table->string('nombre_categ');
            $table->timestamps();
        });

        $categorias = [
            ['nombre_categ' => 'computadora'],
            ['nombre_categ' => 'vehiculos'],
            ['nombre_categ' => 'muebles'],
            ['nombre_categ' => 'moda'],
        ];

        foreach ($categorias as $categoria) {
            DB::table('categoria')->insert($categoria);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria');
    }
};