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
        Schema::create('consultation_feedback', function (Blueprint $table) {
            $table->id('feedback_id');
            $table->text('feedback');
            $table->foreignId('teacher_id');
            $table->foreignId('consultation_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_feedback');
    }
};
