<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class UserAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserAccount', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('full_name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('level');
            $table->string('phone')->nullable();
            $table->string('function')->nullable();
            $table->string('avatar')->nullable();
            $table->string('id_card')->nullable();
            $table->string('organize')->nullable();
            $table->string('organize_id')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('employee_detail')->nullable();
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
        Schema::dropIfExists('UserAccount');
    }
}
