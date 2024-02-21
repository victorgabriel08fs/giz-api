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
        Schema::create('registration_exercises', function (Blueprint $table) {
            $table->id();

            $table->decimal("points", 5, 2)->default(0);
            $table->unsignedBigInteger('registration_id')->nullable();
            $table->foreign('registration_id')
                ->references('id')
                ->on('registrations')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->unsignedBigInteger('exercise_id')->nullable();
            $table->foreign('exercise_id')
                ->references('id')
                ->on('exercises')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_exercises');
    }
};
