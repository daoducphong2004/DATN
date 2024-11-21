<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovalHistoriesTable extends Migration
{
    public function up()
    {
        Schema::create('approval_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id'); // ID của sách
            $table->unsignedBigInteger('user_id'); // ID của người thực hiện duyệt
            $table->text('reason')->nullable(); // Lý do từ chối (có thể null)
            $table->enum('status', ['approved', 'rejected'])->default('approved');

            $table->timestamps(); // Thêm các cột created_at và updated_at

            // Khóa ngoại
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('approval_histories');
    }
}
