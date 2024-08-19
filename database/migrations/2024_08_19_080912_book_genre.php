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

            Schema::create('book_genres', function (Blueprint $table) {
                $table->foreignId('book_id')->constrained('books')->onDelete('cascade');
                $table->foreignId('genre_id')->constrained('genres')->onDelete('cascade');
                $table->primary(['book_id', 'genre_id']);
                $table->timestamps();
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_genres');
    }
};
