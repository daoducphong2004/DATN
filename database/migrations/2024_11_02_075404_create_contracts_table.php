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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Người đăng truyện
            $table->integer('revenue_share')->default(70); // Phần trăm chia sẻ doanh thu mặc định
            $table->date('start_date'); // Ngày bắt đầu hợp đồng
            $table->date('end_date')->nullable(); // Ngày kết thúc hợp đồng, nếu có
            $table->string('status')->default('active'); // Trạng thái hợp đồng
            $table->text('terms')->nullable(); // Điều khoản hợp đồng
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
