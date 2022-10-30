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
        // BookMaster::statement("ALTER TABLE book_masters MODIFY type ENUM ('読書中', '積読本', '読んだ', '読みたい')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_masters', function (Blueprint $table) {
            //
        });
    }
};
