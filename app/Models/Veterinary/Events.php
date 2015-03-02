<?php namespace App\Models\Veterinary;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Events extends Model {

    protected $table = 'events';
    protected $fillable = array('pet_id', 'vet_id', 'name');
}
