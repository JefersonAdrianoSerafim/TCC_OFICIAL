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
        Schema::create('user__subjects', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user_fk');
            $table->unsignedBigInteger('id_subject_fk');
            $table->foreign('id_user_fk')->references('id')->on('users');
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
        Schema::dropIfExists('user__subjects');
    }
};
