<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetPlanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pet_plan', function(Blueprint $table)
		{
			$table->increments('id');
			$table->smallInteger('plan_id');
			$table->smallInteger('pet_id')->references('pet_id')->on('pets');
			$table->smallInteger('customer_id')->references('customer_id')->on('customers');
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
		Schema::drop('pet_plan');
	}

}
