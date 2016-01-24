<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('poster_id');
            $table->string('poster_username');
            $table->integer('feedbacker_id');
            $table->string('feedbacker_username');
            $table->integer('post_id');
            $table->string('post_title');
            $table->tinyinteger('posetive');
            $table->tinyinteger('neutral');
            $table->tinyinteger('negative');
            $table->text('feedbacker_comment');
            $table->string('feedback_by');
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
        Schema::drop('feedbacks');
    }
}
