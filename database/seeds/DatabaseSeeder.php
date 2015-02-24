<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
	
		$this->call("VaultTableSeeder");
		$this->call("EventsTableSeeder");
		$this->call("ExaminationsTableSeeder");
		$this->call("LastVaccinationsTableSeeder");
		$this->call("TreatmentAttachmentsTableSeeder");
		$this->call("TreatmentsTableSeeder");
		$this->call("VaccinationsTableSeeder");
		$this->call("VaultTableSeeder");
		$this->call("VeterinariansTableSeeder");
		$this->call("VisitsTableSeeder");
		$this->call("VisitTreatmentsTableSeeder");
	}

}