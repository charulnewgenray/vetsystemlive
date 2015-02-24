<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder {

    public function run() {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //Add the master administrator, user id of 1
        DB::table('events')->truncate();

        $events = array(
            'pet_id' => '1',
            'vet_id' => '1',
            'name' => 'Test Event',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        );

        DB::table('events')->insert($events);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}