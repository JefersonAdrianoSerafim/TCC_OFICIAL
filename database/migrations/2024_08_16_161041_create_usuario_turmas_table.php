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
        Schema::create('usuario_turma', function (Blueprint $table) {
            $table->unsignedBigInteger('id_usuario_fk');
            $table->unsignedBigInteger('id_turma_fk');
            $table->foreign('id_usuario_fk')->references('id_usuario')->on('usuarios');
            $table->foreign('id_turma_fk')->references('id_turma')->on('turmas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_turmas');
    }
};
