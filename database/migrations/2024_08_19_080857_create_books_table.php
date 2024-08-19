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
            Schema::create('books', function (Blueprint $table) {
                $table->id();
                $table->string('slug')->unique();
                $table->string('title');
                $table->string('author');
                $table->string('painter')->nullable();
                $table->string('book_path');
                $table->text('desc');
                $table->string('note');
                $table->string('is_VIP');
                $table->string('is_delete');
                $table->enum('adult',[0,1]);
                $table->foreignIdFor(group::class)->constrained();
                $table->timestamps();
            });
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
