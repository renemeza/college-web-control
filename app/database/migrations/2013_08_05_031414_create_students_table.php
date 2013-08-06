<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table) {
			$table->string('id', 40);
			$table->string('first_name', 80);
			$table->string('last_name', 80);
			$table->date('birth_date')->nullable();
			$table->string('address')->nullable();
			$table->binary('photo')->nullable();
			$table->string('career_id', 40)->nullable();
			$table->date('start_date')->default((new DateTime())->format('Y-m-d'));
			$table->date('final_date')->nullable();
			$table->timestamps();

			$table->primary('id');
			$table->index('first_name');
			$table->index('last_name');
			$table->index(array('id','first_name', 'last_name'));
			$table->index(array('first_name', 'last_name'));
			$table->foreign('career_id')
				->references('id')
				->on('careers')
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
		Schema::drop('students');
	}

}
