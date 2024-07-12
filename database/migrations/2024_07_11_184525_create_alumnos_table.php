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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('aluNombre', 70)->index();
            $table->string('aluCurso', 50)->index();
            $table->decimal('aluNota1', 3, 1);
            $table->decimal('aluNota2', 3, 1);
            $table->decimal('aluPromedio', 3, 1)->nullable();
            $table->string('aluCondicion', 15)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
