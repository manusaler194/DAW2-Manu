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
       Schema::create('articulos', function (Blueprint $table) {
            $table->id();

            //$table->integer('categoria_id')->unsigned();  //categorias_id sería la CA que no hace falta ponerla

            $table->text('titulo');
            $table->mediumText('descripcion');
            $table->timestamps();

            //relaciones
            $table->foreignId('categoria_id')->constrained('categorias')->cascadeOnDelete()->cascadeOnUpdate();

            //$table->foreign('categoria_id')
               /* ->references('id_categoria')
                ->on('categorias')
                ->onDelete('cascade')
                ->onUpdate('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
