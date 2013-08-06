<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schedules', function(Blueprint $table) {
			$table->string('id', 40);
			$table->time('start_time');
			$table->time('final_time');
			$table->string('days')->default('LMXJV');
			$table->string('exam_day')->nullable();
			$table->timestamps();

			$table->primary('id');
			$table->index('start_time');
			$table->index('final_time');
			$table->index(array('start_time', 'final_time'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('schedules');
	}

}
