<?php

use App\Models\book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBookIdToReadingHistoriesTable extends Migration
{
    public function up()
    {
        Schema::table('reading_histories', function (Blueprint $table) {
            $table->foreignIdFor(book::class)->after('user_id')->constrained(); // Add book_id column
        });
    }

    public function down()
    {
        Schema::table('reading_histories', function (Blueprint $table) {
            $table->dropColumn('book_id');
        });
    }
}
