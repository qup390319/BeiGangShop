<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTStoreInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_store_info', function (Blueprint $table) {
            $table->id('info_id')->autoIncrement();
            $table->string('info_name')->nullable();
            $table->string('info_address')->nullable();
            $table->string('info_phone')->nullable();
            $table->string('info_hours')->nullable();
            $table->string('info_take_out')->nullable();
            $table->string('info_delivery')->nullable();
            $table->string('info_fans')->nullable();
            $table->string('info_mark')->nullable();
            $table->string('info_tag')->nullable();
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
        Schema::dropIfExists('t_store_info');
    }
}
