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
        Schema::create('usuario_disciplina', function (Blueprint $table) {
            $table->unsignedBigInteger('id_usuario_fk');
            $table->unsignedBigInteger('id_disciplina_fk');
            $table->foreign('id_usuario_fk')->references('id_usuario')->on('usuarios');
            $table->foreign('id_disciplina_fk')->references('id_disciplina')->on('disciplinas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_disciplinas');
    }
};
