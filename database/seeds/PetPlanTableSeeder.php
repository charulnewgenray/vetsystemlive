<?php

use Illuminate\Database\Seeder;

class PetPlanTableSeeder extends Seeder {

    public function run() {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //Add the master administrator, user id of 1
        DB::table('pet_plan')->truncate();

        $pet_plan = array(
            'plan_id' => '1',
            'pet_id' => '14',
            'customer_id' => '15',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        );

        DB::table('pet_plan')->insert($pet_plan);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}