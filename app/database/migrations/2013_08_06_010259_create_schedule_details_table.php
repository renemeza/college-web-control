<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScheduleDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schedule_details', function(Blueprint $table) {
			$table->string('schedule_id', 40);
			$table->string('course_section_id', 40);
			$table->string('teacher_id', 40)->nullable();
			$table->string('time_period_id', 40);
			$table->string('subject_id', 40);
			$table->timestamps();

			$table->unique(array('schedule_id', 'course_section_id', 'time_period_id', 'subject_id'), 'schedule_section_period');

			$table->foreign('schedule_id')
				->references('id')
				->on('schedules')
				->onDelete('CASCADE')
				->onUpdate('CASCADE');
			$table->foreign('course_section_id')
				->references('id')
				->on('course_sections')
				->onDelete('CASCADE')
				->onUpdate('CASCADE');
			$table->foreign('teacher_id')
				->references('id')
				->on('teachers')
				->onDelete('SET NULL')
				->onUpdate('CASCADE');
			$table->foreign('time_period_id')
				->references('id')
				->on('time_periods')
				->onDelete('CASCADE')
				->onUpdate('CASCADE');
			$table->foreign('subject_id')
				->references('id')
				->on('subjects')
				->onDelete('CASCADE')
				->onUpdate('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('schedule_details');
	}

}
