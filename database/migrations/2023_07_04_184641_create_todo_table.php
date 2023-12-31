<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // assignment name
            $table->string('title', 100)->nullable();
            // is it an Exam or Assignment?
            $table->string('type')->nullable();
            // due Date
            $table->date('date')->nullable();
            // Due time
            $table->time('time')->nullable();
            // course
            $table->string('course')->nullable();
            // Marked as complete
            $table->boolean('isComplete')->nullable();
            // Linked to user 
            // cascade means here that if the user is delete, then the listings are deleted as well
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todo');
    }
};