<?php

use Illuminate\Database\Seeder;

class MappingTableSeeder extends Seeder {

    public function run() {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //Add the master administrator, user id of 1
        DB::table('mapping')->truncate();

        $mapping = array(
            'plan_id' => '1,2',
            'treatment_id' => '1',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        );

        DB::table('mapping')->insert($mapping);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}