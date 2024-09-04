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
        Schema::create('commitment__categories', function (Blueprint $table) {
            $table->unsignedBigInteger('id_commitment_fk')->nullable(false);
            $table->unsignedBigInteger('id_category_fk')->nullable(false);
            $table->foreign('id_commitment_fk')->references('id_commitment')->on('commitments');
            $table->foreign('id_category_fk')->references('id_category')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commitment__categories');
    }
};
