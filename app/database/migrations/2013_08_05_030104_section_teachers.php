<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class SectionTeachers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('section_teachers', function(Blueprint $table) {
			$table->string('teacher_id');
			$table->string('course_section_id');
			$table->string('time_period_id');
			$table->timestamps();

			$table->foreign('teacher_id')
				->references('id')
				->on('teachers')
				->onDelete('CASCADE')
				->onUpdate('CASCADE');
			$table->foreign('course_section_id')
				->references('id')
				->on('course_sections')
				->onDelete('CASCADE')
				->onUpdate('CASCADE');
			$table->foreign('time_period_id')
				->references('id')
				->on('time_periods')
				->onDelete('NO ACTION')
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
		Schema::drop('section_teachers');
	}

}
