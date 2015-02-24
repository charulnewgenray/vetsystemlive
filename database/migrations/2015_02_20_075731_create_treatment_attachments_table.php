<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatmentAttachmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('treatment_attachments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->smallInteger('visit_id')->references('visit_id')->on('visits');
			$table->text('label');
			$table->text('file_path');
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
		Schema::drop('treatment_attachments');
	}

}
