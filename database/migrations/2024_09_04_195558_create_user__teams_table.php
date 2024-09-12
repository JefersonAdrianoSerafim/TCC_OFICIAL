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
        Schema::create('user__teams', function (Blueprint $table) {
            $table->unsignedBigInteger('id_team_fk');
            $table->foreign('id_team_fk')->references('id_team')->on('teams');
            $table->unsignedBigInteger('id_user_fk');
            $table->foreign('id_user_fk')->references('id_user')->on('users');
            $table->boolean('creator_userteam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user__teams');
    }
};
