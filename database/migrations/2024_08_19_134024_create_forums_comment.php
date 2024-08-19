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
        Schema::create('forums_comment', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('forums_id')->references('id')->on('forums')->onDelete('set null');
            $table->bigInteger('total_user_see');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forums_comment');
    }
};
