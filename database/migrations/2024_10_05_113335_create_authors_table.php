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

        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('phone', 20)->nullable();
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->string('front_id_image', 255)->nullable(); // Ảnh CMND/CCCD mặt trước
            $table->string('back_id_image', 255)->nullable();  // Ảnh CMND/CCCD mặt sau
            $table->string('portrait_image', 255)->nullable(); // Ảnh chân dung
            $table->text('reason')->nullable();
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending')->change();
            $table->string('requested_role')->nullable();
            $table->boolean('is_approved')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
