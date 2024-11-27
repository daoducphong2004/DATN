<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateLettersTableNullableIds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('letters', function (Blueprint $table) {
            // Thay đổi các cột sender_id và receiver_id thành nullable
            $table->unsignedBigInteger('sender_id')->nullable()->change();
            $table->unsignedBigInteger('receiver_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('letters', function (Blueprint $table) {
            // Nếu rollback, chúng ta cần thay đổi lại các cột về không nullable
            $table->unsignedBigInteger('sender_id')->nullable(false)->change();
            $table->unsignedBigInteger('receiver_id')->nullable(false)->change();
        });
    }
}
