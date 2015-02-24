<?php

use Illuminate\Database\Seeder;

class VaccinationsTableSeeder extends Seeder {

    public function run() {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //Add the master administrator, user id of 1
        DB::table('vaccinations')->truncate();

        $vaccinations = array(
            array('vaccine_name' => 'Rabies',
                'vaccine_price' => '10',
                'plan_id' => '2',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array('vaccine_name' => 'Deworming',
                'vaccine_price' => '20',
                'plan_id' => '2',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array('vaccine_name' => 'Distemper',
                'vaccine_price' => '30',
                'plan_id' => '2',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),

        );

        DB::table('vaccinations')->insert($vaccinations);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}