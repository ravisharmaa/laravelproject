<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJcropTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jcrop', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->integer('rank')->nullable();
            $table->string('image','255')->nullable();
            $table->string('slug')->nullable(false);
            $table->boolean('status')->default('1');
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
        Schema::dropIfExists('jcrop');
    }
}
