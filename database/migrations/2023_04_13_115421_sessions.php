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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('student_id');
            $table->tinyInteger('room_id');
            $table->tinyInteger('time_visibility');
            $table->timestamp('session_date');
            $table->tinyInteger('session_duration');
            $table->timestamps();
            $table->longText('session_description')->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
