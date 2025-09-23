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
        Schema::create('readings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('genre'); 
            $table->enum('type', ['Manga', 'Manhwa', 'Manhua', 'Webtoon', 'Novel']);
            $table->integer('current_chapter')->default(0);  // <-- Add this
            $table->integer('total_chapters')->nullable();   // <-- Add this
            $table->enum('status', ['Reading', 'Completed', 'On-Hold', 'Dropped', 'Planned'])
                ->default('Reading');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('readings');
    }
};
