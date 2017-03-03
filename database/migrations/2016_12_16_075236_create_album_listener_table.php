<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumListenerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_listeners', function (Blueprint $table) {
            $table->unsignedInteger('album_id');
            $table->foreign('album_id')->references('id')->on('album')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('listeners_id');
            $table->foreign('listeners_id')->references('id')->on('listener')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('album_listener');
    }
}
