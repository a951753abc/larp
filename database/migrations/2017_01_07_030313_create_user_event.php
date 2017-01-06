<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_events', function (Blueprint $table) {
            $table->increments('sn');
            $table->integer('user_sn');
            $table->integer('event_sn');
            $table->timestamps();
            $table->index('user_sn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_events');
    }
}
