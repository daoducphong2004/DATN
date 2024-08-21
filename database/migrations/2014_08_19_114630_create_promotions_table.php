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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id('promotion_id'); 
            $table->string('code')->unique(); 
            $table->text('description')->nullable(); 
            $table->enum('discount_type', ['percentage', 'fixed']); 
            $table->decimal('discount_value', 8, 2); 
            $table->decimal('max_discount', 8, 2)->nullable(); 
            $table->timestamp('start_date'); 
            $table->timestamp('end_date')->nullable(); 
            $table->integer('usage_limit')->nullable(); 
            $table->integer('usage_count')->default(0); 
            $table->enum('status', ['active', 'expired'])->default('active'); 
            $table->foreignId('tier_level')->constrained('promotion_tier')->onDelete('cascade'); 

            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
