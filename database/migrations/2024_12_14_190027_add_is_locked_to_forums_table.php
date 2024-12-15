<?php

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
        Schema::table('forums', function (Blueprint $table) {
            $table->boolean('is_locked')->default(0); // Thêm cột is_locked với giá trị mặc định là 0
        });
    }

    public function down()
    {
        Schema::table('forums', function (Blueprint $table) {
            $table->dropColumn('is_locked'); // Nếu rollback, xóa cột is_locked
        });
    }
};
