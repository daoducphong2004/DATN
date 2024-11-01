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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id'); // Liên kết với bảng truyện
            $table->unsignedBigInteger('user_id'); // Liên kết với bảng người dùng (nếu có)
            $table->integer('rating')->comment('Đánh giá số sao, từ 1 đến 5');
            $table->text('comment')->nullable()->comment('Nhận xét của người dùng');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade'); // onDelete : xóa n~ dữ liệu đi theo khóa ngoại
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('like_rating');
        Schema::dropIfExists('ratings');
    }
};































































































