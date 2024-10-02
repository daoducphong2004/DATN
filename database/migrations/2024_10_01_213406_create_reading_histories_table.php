<?php

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
    public function up()
    {
        Schema::create('reading_histories', function (Blueprint $table) {
            $table->id();
            // Foreign keys
            $table->foreignIdFor(User::class)->on('users')->onDelete('cascade');
            $table->foreignIdFor(chapter::class)->on('chapters')->onDelete('cascade');
            $table->timestamp('last_read_at')->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('reading_histories');
    }

};
