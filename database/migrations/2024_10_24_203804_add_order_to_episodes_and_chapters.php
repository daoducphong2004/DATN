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
        Schema::table('episodes', function (Blueprint $table) {
            $table->integer('order')->default(0); // Thêm cột order
        });

        Schema::table('chapters', function (Blueprint $table) {
            $table->integer('order')->default(0); // Thêm cột order
        });
    }

    public function down()
    {
        Schema::table('episodes', function (Blueprint $table) {
            $table->dropColumn('order');
        });

        Schema::table('chapters', function (Blueprint $table) {
            $table->dropColumn('order');
        });
    }


    /**
     * Reverse the migrations.
     */
};
