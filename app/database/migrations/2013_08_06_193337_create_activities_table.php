<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activities', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('venue_id')->nullable();
			$table->integer('page_type');
			$table->string('register_link')->nullable();
			$table->string('start_time')->nullable();
			$table->string('end_time')->nullable();
			$table->integer('day_id');
			$table->text('description')->nullable();
			$table->string('image')->nullable();
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
		Schema::drop('activities');
	}

}
