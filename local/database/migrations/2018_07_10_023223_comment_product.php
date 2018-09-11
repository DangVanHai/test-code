<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CommentProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comment', function (Blueprint $table) {
            $table->increments('com_id');
            $table->integer('com_user')->unsigned()->nullable();
            $table->foreign('com_user')
            ->references('user_id')
            ->on('UserAccount')
            ->onDelete('cascade');
            $table->integer('com_prod')->unsigned();
            $table->foreign('com_prod')
            ->references('prod_id')
            ->on('Product')
            ->onDelete('cascade');
            $table->string('com_username');
            $table->string('com_email')->unique();
            $table->text('com_comment');
            $table->float('com_rating');
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
        Schema::dropIfExists('Comment');
    }
}
