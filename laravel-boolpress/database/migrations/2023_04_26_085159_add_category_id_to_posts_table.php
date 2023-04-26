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
        Schema::table('posts', function (Blueprint $table) {
            // 1. aggiungendo la colonna
            $table->unsignedBigInteger('category_id')->nullable()->after('id');

            // 2. creando la relazione tra chiave esterna e chiave primaria
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // 2. droppiamo la realzione
            // $table->dropForeign('posts_category_id_foreign');
            $table->dropForeign(['category_id']);

            // 1. droppare la colonna
            $table->dropColumn('category_id');
        });
    }
};
