<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTStoreCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_store_comment', function (Blueprint $table) {
            $table->id('comment_id')->autoIncrement();
            $table->string('comment_name')->nullable();
            $table->string('comment_content')->nullable();
            $table->float('comment_score')->nullable();
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
        Schema::dropIfExists('t_store_comment');
    }
}
