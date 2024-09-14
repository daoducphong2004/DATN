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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('group')->nullable(); // Thêm cột group_id
            $table->foreign('group')->references('id')->on('groups')->onDelete('set null'); // Liên kết khóa ngoại
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['group']); // Xóa khóa ngoại
            $table->dropColumn('group'); // Xóa cột group_id
        });
    }
};
