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
        Schema::create('promotion_tiers', function (Blueprint $table) {
            $table->integer('tier_level')->primary(); 
            $table->decimal('bonus_multiplier', 5, 2); 
            $table->decimal('vip_discount', 5, 2); 
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
