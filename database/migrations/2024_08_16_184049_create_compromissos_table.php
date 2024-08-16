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
        Schema::create('compromissos', function (Blueprint $table) {
            $table->id('id_compromisso');
            $table->string('nome_compromisso')->nullable(false);
            $table->string('descricao_compromisso')->nullable(true);
            $table->dateTime('data_compromisso')->nullable(false);
            $table->unsignedBigInteger('id_disciplina_fk');
            $table->foreign('id_disciplina_fk')->references('id_disciplina')->on('disciplinas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compromissos');
    }
};
