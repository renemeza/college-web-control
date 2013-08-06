<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeachersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function(Blueprint $table) {
            $table->string('id', 40);
            $table->string('first_name', 80);
			$table->string('last_name', 80);
			$table->string('address', 250)->nullable();
			$table->date('birth_date');
			$table->date('hire_date')->nullable()->default((new DateTime())->format('Y-m-d'));
			$table->date('dismissal_date')->nullable();
			$table->binary('photo')->nullable();
            $table->string('type', 20)->nullable()->default('PERMANENT');
            $table->boolean('is_activated')->default(true);
            $table->timestamps();

            $table->primary('id');
            $table->index('first_name');
            $table->index('last_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teachers');
    }

}
