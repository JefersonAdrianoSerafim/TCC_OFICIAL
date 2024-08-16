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
        Schema::create('compromisso_categoria', function (Blueprint $table) {
            $table->unsignedBigInteger('id_compromisso_fk');
            $table->unsignedBigInteger('id_categoria_fk');
            $table->foreign('id_compromisso_fk')->references('id_compromisso')->on('compromissos');
            $table->foreign('id_categoria_fk')->references('id_categoria')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compromisso_categorias');
    }
};
