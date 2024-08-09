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
        Schema::table('class_models', function (Blueprint $table) {
            
            $table->bigInteger('teacher_id')->after('id');
            $table->bigInteger('batch_id')->after('teacher_id');
            $table->bigInteger('shift_id')->after('batch_id');
            $table->bigInteger('course_id')->after('shift_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('class_models', function (Blueprint $table) {
            //

            $table->dropColumn('teacher_id');
            $table->dropColumn('batch_id');
            $table->dropColumn('course_id');
            $table->dropColumn('shift_id');

        });
    }
};