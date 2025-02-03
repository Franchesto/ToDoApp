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
        Schema::create('tasks', function (Blueprint $table)
        {
           $table->id();
           $table->string('title');
           $table->string('description');
           $table->enum('status', ['completed', 'pending', 'postponed'])->default('pending');
           $table->timestamps();

           $table->foreignId('todo_id')->constrained('todos');
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
