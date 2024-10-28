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
        Schema::table('authors', function (Blueprint $table) {
            if (Schema::hasColumn('authors', 'requested_role')) {
                $table->dropColumn('requested_role');
            }

            if (Schema::hasColumn('authors', 'is_approved')) {
                $table->dropColumn('is_approved');
            }

            // $table->enum('is_approve', ['pending', 'accepted', 'rejected'])->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->string('requested_role')->nullable();
            $table->boolean('is_approved')->default(false);


            $table->dropColumn('is_approved');
        });
    }
};
