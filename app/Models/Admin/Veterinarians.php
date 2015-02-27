<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Veterinarians extends Model {
    protected $fillable = array('vet_firstname', 'vet_lastname', 'vet_dob', 'vet_email','vet_gender','vet_address_1','vet_address_2','vet_city','vet_country','vet_postcode','vet_clinic','vet_phone','vet_mobile','working_days','working_hours','enabled');
}
