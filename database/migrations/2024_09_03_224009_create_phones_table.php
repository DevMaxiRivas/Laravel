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
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('number');

            // Definir una fk camino largo
            // Se define la columna del mismo tipo de la pk
            // $table->unsignedBigInteger('user_id');
            // // Se asigna
            // $table->foreign('user_id')
            //     // Se define la columna de la tabla que se relaciona
            //     ->references('id')
            //     // Se especifica la table
            //     ->on('users')
            //     // Se especifica el comportamiento
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade')
            // ;

            // Definir una fk camino corto
            // Convenciones a seguir
            // $table->foreignId('[tabla_en_singular_y_minuscula]_id')
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade')
            ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
