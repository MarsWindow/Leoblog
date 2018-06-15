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
            $table->unsignedInteger('mobile')->default(0);
            $table->string('username')->default('');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('encrypt')->default('');
            $table->string('nick')->index()->default('');
            $table->decimal('amount',9,2)->default('0.00');
            $table->unsignedInteger('score')->default(0);
            $table->string('face')->default('');
            $table->string('loginip')->default('');
            $table->unsignedMediumInteger('loginnum')->default(0);
            $table->unsignedSmallInteger('groupid')->default(0);
            $table->unsignedTinyInteger('message')->default(1);
            $table->unsignedTinyInteger('status')->default(1);
            $table->unsignedTinyInteger('islock')->default(1);
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
