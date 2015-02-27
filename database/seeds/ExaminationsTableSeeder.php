<?php

use Illuminate\Database\Seeder;

class ExaminationsTableSeeder extends Seeder {

    public function run() {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //Add the master administrator, user id of 1
        DB::table('examinations')->truncate();

        $examinations = array(
            'visit_id' => '1',
            'label' => 'Examination First',
            'value' => 'Examinations First Value',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        );

        DB::table('examinations')->insert($examinations);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}