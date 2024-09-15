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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name_subject',50)->nullable(false);
            $table->string('teacher_subject',50)->nullable(true);
            $table->string('color_subject',7)->nullable(true);
            $table->date('startdate_subject')->nullable(false);
            $table->date('enddate_subject')->nullable(false);
            $table->unsignedBigInteger('id_team_fk');
            $table->foreign('id_team_fk')->references('id')->on('teams');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
