<?php

use App\Models\book;
use App\Models\genre;
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
                $table->foreignIdFor(book::class)->constrained()->onDelete('cascade');
                $table->foreignIdFor(genre::class)->constrained()->onDelete('cascade');
                $table->primary(['book_id', 'genre_id']);
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