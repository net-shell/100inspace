<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScreensTable extends Migration {

	public function up()
	{
		Schema::create('screens', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title', 255);
			$table->string('slug', 255);
			$table->integer('weight')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('screens');
	}
}