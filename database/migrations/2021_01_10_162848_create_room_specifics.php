<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomSpecifics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_specifics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("room_id");
            $table->string("identification");
            $table->string("floor");
            $table->text("extra_info")->nullable();
            $table->boolean("status")->default(true);
            $table->foreign('room_id')->references('id')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_specifics');
    }
}
