<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdDeleteToChapterCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chapter_comments', function (Blueprint $table) {
    $table->unsignedBigInteger('is_delete')->nullable()->after('id'); // Thêm cột is_delete, có thể null
            $table->foreign('is_delete')->references('id')->on('users')->onDelete('set null'); // Khóa ngoại tham chiếu đến bảng users        });
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chapter_comments', function (Blueprint $table) {
            $table->dropForeign(['is_delete']); // Xóa khóa ngoại
            $table->dropColumn('is_delete'); // Xóa cột is_delete
        });
    }
}
