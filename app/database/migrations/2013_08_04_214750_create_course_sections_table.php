<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourseSectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_sections', function(Blueprint $table) {
			$table->string('id', 40);
			$table->integer('num_section')->unsigned();
			$table->string('course_id', 40);
			$table->string('turn_id', 40)->nullable();
			$table->string('classroom_id', 40)->nullable();
			$table->timestamps();

			$table->primary('id');
			$table->unique(array('course_id', 'num_section', 'turn_id'));

			$table->foreign('course_id')
				->references('id')
				->on('courses')
				->onDelete('CASCADE')
				->onUpdate('CASCADE');

			$table->foreign('turn_id')
				->references('id')
				->on('turns')
				->onDelete('SET NULL')
				->onUpdate('CASCADE');

			$table->foreign('classroom_id')
				->references('id')
				->on('class_rooms')
				->onDelete('SET NULL')
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
		Schema::drop('course_sections');
	}

}
