<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_clase');
            $table->string('codigo')->unique();
            $table->text('descripcion')->nullable();
            
            // Relación con el maestro (Llave foránea)
            $table->foreignId('maestro_id')
                ->constrained('maestros')
                ->onDelete('cascade'); // Si se borra el maestro, se pueden gestionar sus materias o eliminarlas en cascada

            $table->date('fecha_imparticion')->nullable(); // Fecha de cuando se imparte
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};