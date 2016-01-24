<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIllegalPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('illegalPosts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id');
            $table->integer('poster_id');
            $table->string('poster_username');
            $table->string('poster_email');
            $table->integer('user_id');
            $table->string('user_username');
            $table->string('user_email');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('category');
            $table->string('type');
            $table->string('title');
            $table->text('detail');
            $table->string('image_path');
            $table->string('thumb_path');
            //$table->timestamps('posted_date');
            $table->text('illegal_message');
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
        Schema::drop('illegalPosts');
    }
}
