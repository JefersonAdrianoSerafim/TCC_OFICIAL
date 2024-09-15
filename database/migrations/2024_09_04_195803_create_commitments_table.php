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
        Schema::create('commitments', function (Blueprint $table) {
            $table->id();
            $table->string('name_commitment',50)->nullable(false);
            $table->text('description_commitment')->nullable(true);
            $table->date('date_commitment')->nullable(false);
            $table->unsignedBigInteger('id_subject_fk')->nullable(false);
            $table->foreign('id_subject_fk')->references('id')->on('subjects');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commitments');
    }
};
