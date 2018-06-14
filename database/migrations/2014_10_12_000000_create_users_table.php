<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('mobile');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('encrypt');
            $table->string('nick')->index();
            $table->decimal('amount',5,2);
            $table->unsignedInteger('score');
            $table->string('face');
            $table->string('loginip');
            $table->unsignedMediumInteger('loginnum');
            $table->unsignedSmallInteger('groupid');
            $table->unsignedTinyInteger('message');
            $table->unsignedTinyInteger('status');
            $table->unsignedTinyInteger('islock');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
