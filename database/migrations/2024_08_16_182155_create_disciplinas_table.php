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
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->id('id_disciplina');
            $table->string('nome_disciplina', 50)->nullable(false);
            $table->string('nomeDocente_disciplina')->nullable(true);
            $table->string('cor_disciplina', 7);
            $table->unsignedBigInteger('id_turma_fk');
            $table->foreign('id_turma_fk')->references('id_turma')->on('turmas');
            $table->dateTime('dataInicio_disciplina')->nullable(false);
            $table->dateTime('dataTermino_disciplina')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disciplinas');
    }
};
