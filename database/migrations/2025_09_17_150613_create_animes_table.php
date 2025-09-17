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
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // for the owner
            $table->string('title');
            $table->string('genre');
            $table->integer('episodes')->nullable();
            $table->enum('status', ['Watching', 'Completed', 'Plan to Watch'])->default('Plan to Watch');
            $table->timestamps();

            // Foreign key to users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animes');
    }
};
