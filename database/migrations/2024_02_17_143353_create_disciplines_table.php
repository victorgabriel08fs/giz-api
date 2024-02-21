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
        Schema::create('disciplines', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("period");
            $table->unsignedBigInteger('career_id')->nullable();
            $table->foreign('career_id')
                ->references('id')
                ->on('careers')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->unsignedBigInteger('semester_id')->nullable();
            $table->foreign('semester_id')
                ->references('id')
                ->on('semesters')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->unsignedBigInteger('teacher_id')->nullable();
            $table->foreign('teacher_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('disciplines');
    }
};
