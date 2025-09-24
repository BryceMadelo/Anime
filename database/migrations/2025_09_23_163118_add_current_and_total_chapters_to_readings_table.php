<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('readings', function (Blueprint $table) {
            if (!Schema::hasColumn('readings', 'current_chapter')) {
                $table->integer('current_chapter')->default(0);
            }
            if (!Schema::hasColumn('readings', 'total_chapters')) {
                $table->integer('total_chapters')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('readings', function (Blueprint $table) {
            $table->dropColumn(['current_chapter', 'total_chapters']);
        });
    }
};

