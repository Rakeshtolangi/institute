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
        Schema::table('enquiries', function (Blueprint $table) {
            $table->string('name');
            $table->string('father_name');
            $table->date('dob');
            $table->string('email');
            $table->string('mobile');
            $table->string('preferred_time');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('enquiries', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('father_name');
            $table->dropColumn('dob');
            $table->dropColumn('email');
            $table->dropColumn('mobile');
            $table->dropColumn('preferred_time');
            $table->dropForeign(['course_id']);
            $table->dropColumn('course_id');
        });
    }
};