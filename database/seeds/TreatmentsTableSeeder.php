<?php

use Illuminate\Database\Seeder;

class TreatmentsTableSeeder extends Seeder {

    public function run() {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //Add the master administrator, user id of 1
        DB::table('treatments')->truncate();

        $treatments = array(
            'treatment_name' => 'Test Treatment',
            'treatment_price' => '54.5',
            'plan_id' => '1',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        );

        DB::table('treatments')->insert($treatments);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}