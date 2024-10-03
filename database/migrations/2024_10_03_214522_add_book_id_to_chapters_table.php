<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBookIdToChaptersTable extends Migration
{
    public function up()
    {
        Schema::table('chapters', function (Blueprint $table) {
            $table->unsignedBigInteger('book_id')->after('id')->nullable(); // Adjust placement as needed
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade'); // Adjust the foreign key if needed
        });
    }

    public function down()
    {
        Schema::table('chapters', function (Blueprint $table) {
            $table->dropForeign(['book_id']); // Drop foreign key
            $table->dropColumn('book_id'); // Drop the column
        });
    }
}

