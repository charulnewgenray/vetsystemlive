<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeterinariansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('veterinarians', function(Blueprint $table)
		{
			$table->increments('vet_id');
			$table->string('vet_first_name');
			$table->string('vet_last_name');
			$table->string('vet_gender');
			$table->string('vet_dob');
			$table->string('vet_address_1');
			$table->string('vet_address_2');
			$table->smallInteger('vet_city');
			$table->smallInteger('vet_country');
			$table->string('vet_clinic');
			$table->string('vet_phone');
			$table->string('vet_mobile');
			$table->text('working_days');
			$table->text('working_hours');
			$table->tinyInteger('enabled');
			$table->smallInteger('user_id')->references('id')->on('users');
			$table->tinyInteger('is_deleted');
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
		Schema::drop('veterinarians');
	}

}
