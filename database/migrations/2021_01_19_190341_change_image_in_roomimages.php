<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeImageInRoomimages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('room_images', function (Blueprint $table) {
            $table->dropColumn("image");
        });

        Schema::table('room_images', function (Blueprint $table) {
            $table->string("storage");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('room_images', function (Blueprint $table) {
            $table->dropColumn("storage");
        });

        Schema::table('room_images', function (Blueprint $table) {
            $table->binary("image");
        });
    }
}
