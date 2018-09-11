<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product', function (Blueprint $table) {
            $table->increments('prod_id');
            $table->integer('prod_cate')->unsigned();
            $table->foreign('prod_cate')
            ->references('cate_id')
            ->on('Calotery')
            ->onDelete('cascade');
            $table->string('prod_name');
            $table->string('prod_code')->unique();
            $table->integer('prod_pi');
            $table->integer('prod_pe');
            $table->integer('prod_qtyI');
            $table->integer('prod_qtyE');
            $table->integer('prod_qtyR');
            $table->string('prod_img');
            $table->float('prod_rate')->nullable();
            $table->string('prod_partner_name')->nullable();
            $table->string('prod_partner_info')->nullable();
            $table->string('prod_partner_level')->nullable();
            $table->string('prod_file')->nullable();
            $table->string('prod_detail')->nullable();
            $table->string('prod_slug')->nullable();
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
        Schema::dropIfExists('Product');
    }
}
