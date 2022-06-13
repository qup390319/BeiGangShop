<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_notifications', function (Blueprint $table) {
            $table->id('noti_id')->autoIncrement();
            $table->string('noti_category')->nullable();
            $table->string('noti_abstract')->nullable();
            $table->string('noti_solution')->nullable();
            $table->string('noti_detail')->nullable();
            $table->date('noti_time')->nullable();
            $table->string('noti_sender_mail')->nullable();
            $table->string('noti_state')->nullable()->default('待處理');
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
        Schema::dropIfExists('t_notifications');
    }
}
