<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersCopyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersCopy', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_username');
            $table->string('user_email');
            $table->string('user_country');
            $table->string('user_state');
            $table->string('user_city');
            $table->string('user_password');
            $table->string('user_folderPath');
            /*$table->timestamps('user_joinedDate');
            $table->timestamps('user_lastLoggedIn');*/
            $table->integer('user_promotedBy');
            $table->string('user_ipAddress');
            $table->tinyInteger('user_status');
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
        Schema::drop('usersCopy');
    }
}
