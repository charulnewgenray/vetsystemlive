<?php

use Illuminate\Database\Seeder;

class VeterinariansTableSeeder extends Seeder {

    public function run() {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //Add the master administrator, user id of 1
        DB::table('veterinarians')->truncate();

        $veterinarian = array(
            'vet_name' => 'Veterinary Doctor',
            'vet_address_1' => '16, Yafo Street',
            'vet_address_2' => 'JERUSALEM',
            'vet_city' => '11',
            'vet_country' => '72',
            'vet_clinic' => 'Jala’a Tower ,REMAL ,GAZA STRIP',
            'vet_phone' => '9876549876',
            'vet_mobile' => '212133332',
            'working_days' => 'Sunday Friday',
            'working_hours' => '10:00 - 5:00',
            'enabled' => '1',
            'user_id' => '3',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'is_deleted' => '0'
        );

        DB::table('veterinarians')->insert($veterinarian);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}