<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('goods', function($table){
            $table->increments('id');
            $table->integer('availability');
            $table->string('brand');
            $table->integer('cat_id');
            $table->text('images_big');
            $table->text('images_small');
            $table->float('price');
            $table->string('new_sale_null');
            $table->timestamps();
        });

        Schema::create('goods_lang', function($table){
            $table->integer('id_goods')->unique();
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('desc_ru');
            $table->string('desc_en');
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('goods');
        Schema::drop('goods_lang');
	}

}
