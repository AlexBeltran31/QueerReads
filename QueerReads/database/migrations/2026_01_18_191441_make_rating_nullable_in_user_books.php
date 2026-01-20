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
        Schema::table('user_books', function (Blueprint $table) {
            $table->integer('rating')->nullable()->change();
            $table->text('review')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_books', function (Blueprint $table) {
            $table->integer('rating')->nullable(false)->change();
            $table->text('review')->nullable(false)->change();
        });
    }
};
