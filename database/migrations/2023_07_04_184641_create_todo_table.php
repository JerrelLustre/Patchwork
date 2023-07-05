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
            $table->string('title', 20)->nullable();
            // is it an Exam or Assignment?
            $table->string('type')->nullable();
            // due Date
            $table->dateTime('due')->nullable();
            // course
            $table->string('course')->nullable();
            // Marked as complete
            $table->boolean('isComplete')->nullable();
            // Linked to user 
            // $table->integer('user_id')->unsigned();
            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users')
            //     ->onDelete('cascade');
            // ;
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