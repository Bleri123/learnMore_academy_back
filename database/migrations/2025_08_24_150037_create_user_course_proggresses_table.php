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
        Schema::create('user_course_proggresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('course_id');
            $table->tinyInteger('completed_sections');
            $table->json('completed_sections_ids')->nullable();
            $table->tinyInteger('pending_sections')->nullable();
            $table->tinyInteger('completed_modules');
            $table->json('completed_modules_ids')->nullable();
            $table->tinyInteger('pending_modules')->nullable();
            $table->boolean('awarded')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_course_proggresses');
    }
};
