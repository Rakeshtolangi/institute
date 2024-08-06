<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**php
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('batch_id');
            $table->bigInteger('course_id');
            $table->string('name');
            $table->string('father_name');
            $table->date('dob');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->enum('gender', ['male', 'female']);
            $table->decimal('course_fee', 8, 2);
            $table->decimal('student_fee', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};