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
        Schema::create('attandances', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('student_id');
            $table->BigInteger('batch_id');
            $table->BigInteger('course_id');
            $table->enum('status',['present', 'absent']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attandances');
    }
};