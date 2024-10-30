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
        Schema::table('bookmarks', function (Blueprint $table) {
            // Drop unnecessary columns
            $table->dropColumn(['name', 'description', 'page_number', 'note', 'status','deleted_at']);
            // Add new columns
            $table->foreignId('chapter_id')->nullable()->constrained();
            $table->integer('line_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookmarks', function (Blueprint $table) {
            // Add dropped columns back
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('page_number');
            $table->text('note')->nullable();
            $table->string('status')->default('active');
            $table->dateTime('deleted_at');
            // Drop newly added columns
            $table->dropConstrainedForeignId('chapter_id');
            $table->dropColumn('line_id');
        });
    }
};
