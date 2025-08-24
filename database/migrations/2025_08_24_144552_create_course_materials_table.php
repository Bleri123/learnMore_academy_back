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
        Schema::create('course_materials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_section_id');
            $table->string('title');
            $table->enum('type', ['text', 'image', 'video', 'file']);
            $table->text('content')->nullable();
            $table->string('material_url')->nullable();
            $table->smallInteger('sort_order')->default(0);
            $table->foreignId('created_by');
            $table->foreignId('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('course_section_id')->references('id')->on('course_sections')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_materials');
    }
};
