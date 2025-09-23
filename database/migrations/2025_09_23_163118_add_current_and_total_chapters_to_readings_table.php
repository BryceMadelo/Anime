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
        Schema::table('readings', function (Blueprint $table) {
            $table->integer('current_chapter')->default(0);
            $table->integer('total_chapters')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('readings', function (Blueprint $table) {
            $table->dropColumn(['current_chapter', 'total_chapters']);
        });
    }

};
