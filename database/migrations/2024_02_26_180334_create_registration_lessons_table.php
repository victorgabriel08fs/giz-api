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
        Schema::create('registration_lessons', function (Blueprint $table) {
            $table->id();

            $table->boolean("presence")->default(1);
            $table->unsignedBigInteger('registration_id')->nullable();
            $table->foreign('registration_id')
                ->references('id')
                ->on('registrations')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->unsignedBigInteger('lesson_id')->nullable();
            $table->foreign('lesson_id')
                ->references('id')
                ->on('lessons')
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
        Schema::dropIfExists('registration_lessons');
    }
};
