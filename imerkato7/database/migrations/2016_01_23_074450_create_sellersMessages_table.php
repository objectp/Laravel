<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellersMessages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('table_type');
            $table->integer('last_inserted_buyer_id');
            $table->integer('user_id');
            $table->string('user_username');
            $table->string('user_email');
            $table->integer('buyer_id');
            $table->string('buyer_username');
            $table->string('buyer_email');
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
        Schema::drop('sellersMessages');
    }
}
