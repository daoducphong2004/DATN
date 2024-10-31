<?php

use App\Models\book;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(book::class)->onDelete('cascade');
            $table->foreignIdFor(User::class)->onDelete('cascade');
            $table->string('contract_number');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('author_name');
            $table->text('author_address')->nullable();
            $table->string('author_phone', 20)->nullable();
            $table->string('author_email')->nullable();
            $table->text('content')->nullable();
            $table->decimal('payment_amount', 15, 2)->nullable();
            $table->string('payment_method')->nullable();
            $table->date('payment_due_date')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
