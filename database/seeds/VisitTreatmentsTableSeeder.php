<?php

use Illuminate\Database\Seeder;

class VisitTreatmentsTableSeeder extends Seeder {

    public function run() {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //Add the master administrator, user id of 1
        DB::table('visit_treatments')->truncate();

        $visit_treatments = array(
            'visit_id' => '1',
            'treatment_id' => '1',
            'label' => 'Visit Treatment Label',
            'price' => '100.5',
            'covered' => '0',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        );

        DB::table('visit_treatments')->insert($visit_treatments);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}