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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_paciente')->constrained('pacientes');
            $table->foreignId('id_doctor')->constrained('doctores');
            $table->foreignId('id_procedimiento')->constrained('procedimientos');
            $table->text('descripcion_manual')->nullable();
            $table->text('observaciones')->nullable();
            $table->string('estado');
            $table->date('fecha');
            $table->time('hora');
            $table->time('hora_fin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
