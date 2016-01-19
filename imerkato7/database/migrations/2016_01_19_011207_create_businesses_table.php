<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('user_username');
            $table->string('user_email');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('category');
            $table->string('type');
            $table->string('title');
            $table->text('detial');
            $table->string('contact_imerkato');
            $table->string('contact_phone');
            $table->string('image_path');
            $table->string('thumb_path');
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
        Schema::drop('businesses');
    }
}
