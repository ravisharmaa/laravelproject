<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema:: create('config', function(Blueprint $table){
            $table->increments('id');
            $table->string('address',250)->nullable();
            $table->string('facebook',250)->nullable();
            $table->string('gplus', 250)->nullable();
            $table->text('about_desc')->nullable();
            $table->string('twitter', 250)->nullable();
            $table->string('mail', 250)->nullable();
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
         Schema::dropIfExists('config');
    }
}
