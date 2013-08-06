<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTurnsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('turns', function(Blueprint $table) {
			$table->string('id', 40);
			$table->string('name', 80);
			$table->time('start_time');
			$table->time('final_time');
			$table->timestamps();

			$table->primary('id');
			$table->unique('name');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('turns');
	}

}
