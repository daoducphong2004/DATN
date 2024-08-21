<?php

use App\Models\Promotion;
use App\Models\User;
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
        Schema::create('promotion_tiers', function (Blueprint $table) {
            $table->foreignIdFor(Promotion::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(User::class)->constrained()->onDelete('cascade');
            $table->primary(['promotion_id','user_id']);
            $table->integer('tier_level');
            $table->decimal('bonus_multiplier', 8, 2);
            $table->decimal('vip_discount', 8, 2);
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotion_tiers');
    }
};