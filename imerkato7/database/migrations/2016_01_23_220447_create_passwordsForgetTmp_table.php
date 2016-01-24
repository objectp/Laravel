<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordsForgetTmpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passwordsForgetTmp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_tmpUsername');
            $table->string('user_tmpEmail');
            $table->string('activation');
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
        Schema::drop('passwordsForgetTmp');
    }
}
