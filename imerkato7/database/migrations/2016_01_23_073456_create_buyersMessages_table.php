<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyersMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyersMessages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('table_type');
            $table->integer('user_id');
            $table->string('user_username');
            $table->string('user_email');
            $table->integer('seller_id');
            $table->string('seller_username');
            $table->string('seller_email');
            $table->integer('post_id');
            $table->string('post_title');
            $table->text('message_body');
            $table->tinyInteger('seen');
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
        Schema::drop('buyersMessages');
    }
}
