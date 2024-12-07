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
        Schema::table('approval_histories', function (Blueprint $table) {
            $table->dropForeign(['book_id']); 
            $table->dropColumn('book_id'); // Bỏ cột book_id
            $table->unsignedBigInteger('chapter_id')->nullable()->after('id'); // Thêm cột chapter_id
            $table->foreign('chapter_id')->references('id')->on('chapters')->onDelete('cascade'); // Thiết lập khóa ngoại
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('approval_histories', function (Blueprint $table) {
            $table->dropForeign(['chapter_id']); // Xóa khóa ngoại chapter_id
            $table->dropColumn('chapter_id'); // Xóa cột chapter_id
            $table->unsignedBigInteger('book_id')->nullable()->after('id'); // Thêm lại cột book_id
        });
    }
};
