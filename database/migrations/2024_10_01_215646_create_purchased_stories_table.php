<?php

use App\Models\Book;
use App\Models\chapter;
use App\Models\User;
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
        Schema::create('purchased_stories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(chapter::class)->constrained();
            $table->foreignIdFor(User::class)->constrained();
            $table->timestamp('purchase_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchased_stories');
    }
};
