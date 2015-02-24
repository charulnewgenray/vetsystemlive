<?php

use Illuminate\Database\Seeder;

class LastVaccinationsTableSeeder extends Seeder {

    public function run() {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //Add the master administrator, user id of 1
        DB::table('last_vaccinations')->truncate();

        $last_vaccinations = array(
            'vaccine_id' => '1',
            'event_id' => '1',
            'vaccine_name' => 'Test Vaccination',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        );

        DB::table('last_vaccinations')->insert($last_vaccinations);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}