<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration {

	public function up()
	{
		Schema::create('pages', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->longText('text');
			$table->longText('image')->nullable();
			$table->integer('weight')->nullable();
			$table->integer('screen_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('pages');
	}
}
