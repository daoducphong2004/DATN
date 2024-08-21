<?php

use App\Models\Forum;
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
        Schema::create('forums_comment', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Forum::class)->constrained();
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