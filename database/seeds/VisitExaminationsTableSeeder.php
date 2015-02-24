<?php

use Illuminate\Database\Seeder;

class VisitExaminationsTableSeeder extends Seeder {

    public function run() {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //Add the master administrator, user id of 1
        DB::table('visit_examinations')->truncate();

        $visit_examinations = array(
            'visit_id' => '1',
            'exam_id' => '1',
            'value' => 'Exam Value',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        );

        DB::table('visit_examinations')->insert($visit_examinations);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}