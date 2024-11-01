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
        Schema::create('copyrights', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('cover');
            $table->string('author');
            $table->string('painter');
            $table->string('translater');
            $table->bigInteger('nop')->default(0);
            $table->string('form');
            $table->string('try_reading');
            $table->double('price')->default(0);
            $table->string('summary');
            $table->foreignId('pos_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copyrights');
    }
};
