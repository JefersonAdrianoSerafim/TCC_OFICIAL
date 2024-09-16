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
        Schema::create('commitment_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('id_commitment_fk');
            $table->unsignedBigInteger('id_category_fk');
            $table->foreign('id_commitment_fk')->references('id')->on('commitments');
            $table->foreign('id_category_fk')->references('id')->on('categories');
            $table->timestamps();
            $table->softDeletes();
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
