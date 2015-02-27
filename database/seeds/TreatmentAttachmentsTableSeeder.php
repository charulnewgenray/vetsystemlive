<?php

use Illuminate\Database\Seeder;

class TreatmentAttachmentsTableSeeder extends Seeder {

    public function run() {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //Add the master administrator, user id of 1
        DB::table('treatment_attachments')->truncate();

        $treatment_attachments = array(
            'visit_id' => '1',
            'label' => 'X ray attachment',
            'file_path' => 'http://localhost/laravel/vetsystemlive/test.txt',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        );

        DB::table('treatment_attachments')->insert($treatment_attachments);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}