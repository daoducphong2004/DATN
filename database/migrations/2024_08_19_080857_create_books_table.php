<?php

use App\Models\genre;
use App\Models\group;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('author');
            $table->bigInteger('view')->default(0);
            $table->bigInteger('like')->default(0);
            $table->string('painter')->nullable();
            $table->string('book_path')->nullable();
            $table->text('description');
            $table->text('note')->nullable();
            $table->string('is_VIP');
            $table->string('status');
            $table->string('adult');
            $table->enum('type', [1, 2, 3]);
            $table->foreignIdFor(group::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
