<?php

use Illuminate\Database\Seeder;

class VisitsTableSeeder extends Seeder {

    public function run() {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //Add the master administrator, user id of 1
        DB::table('visits')->truncate();

        $visits = array(
            'event_id' => '1',
            'visit_description' => 'Test visit description',
            'is_emergency' => '0',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        );

        DB::table('visits')->insert($visits);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}