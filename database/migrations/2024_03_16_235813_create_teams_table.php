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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('city_id')->constrained('cities');
            $table->unsignedBigInteger('conference_id')->nullable();
            $table->foreign('conference_id')->references('id')->on('conferences');
            $table->unsignedBigInteger('division_id')->nullable();
            $table->timestamps();

            $table->foreign('conference_id')->references('id')->on('conferences');
            $table->dropForeign(['division_id']);
            $table->dropColumn('division_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
