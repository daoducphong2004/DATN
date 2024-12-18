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
        Schema::table('contracts', function (Blueprint $table) {
            $table->dropColumn('terms');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('tax')->nullable();
            $table->string('fullname')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contracts', function (Blueprint $table) {
            $table->text('terms')->nullable(); // Thêm lại cột 'terms'
            $table->dropColumn(['address', 'phone', 'tax', 'fullname']); // Xóa các cột đã thêm
        });
    }
};
