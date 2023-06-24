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
        Schema::create('learning_materials', function (Blueprint $table) {
            $table->id('material_id');
            $table->string('material_title', 100);
            $table->string('material_cover')->nullable();
            $table->text('material_content');
            $table->foreignId('teacher_id');
            $table->foreignId('subject_id');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learning_materials');
    }
};
