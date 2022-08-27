<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_masters', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('author');
            $table->integer('isbn');
            $table->timestamp('register_date');
            $table->string('memo',256)->comment('memo');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_information');
    }
};
