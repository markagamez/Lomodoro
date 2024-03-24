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
        Schema::create('timers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('task_description');
            $table->enum('status', ['active', 'completed', 'interrupted'])->default('active');
            $table->timestamps();
        });

        Schema::create('timer_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->integer('duration');
            $table->enum('status', ['active', 'completed', 'interrupted']);
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timers');
        Schema::dropIfExists('timer_logs');
    }
};
