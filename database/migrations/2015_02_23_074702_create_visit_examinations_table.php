<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitExaminationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('visit_examinations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->smallInteger('visit_id')->references('visit_id')->on('visits');
			$table->smallInteger('exam_id')->references('exam_id')->on('examinations');
			$table->string('value');
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
		Schema::drop('visit_examinations');
	}

}
