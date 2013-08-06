<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_records', function(Blueprint $table) {
			$table->string('id');
			$table->string('student_id', 40);
			$table->string('course_section_id', 40);
			$table->string('time_period_id', 40);
			$table->date('record_date')->default((new DateTime())->format('Y:m:d H:i:s'));
			$table->timestamps();

			$table->primary('id');
			$table->unique(array('student_id', 'course_section_id', 'time_period_id'), 'student_section_period');
			$table->foreign('student_id')
				->references('id')
				->on('students')
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
		Schema::drop('student_records');
	}

}
