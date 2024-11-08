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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wallet_id')->constrained()->onDelete('cascade'); // Khóa ngoại đến ví của người nhận
            $table->foreignId('purchased_story_id')->constrained()->onDelete('cascade'); // Khóa ngoại đến truyện đã mua
            $table->decimal('amount', 15, 2); // Số tiền giao dịch
            $table->string('type'); // Loại giao dịch (credit hoặc debit)
            $table->string('description')->nullable(); // Mô tả thêm về giao dịch
            $table->string('status')->default('pending'); // Trạng thái giao dịch
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
