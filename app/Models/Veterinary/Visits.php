<?php namespace App\Models\Veterinary;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Visits extends Model {

    protected $table = 'visits';
    protected $fillable = array('event_id','visit_description','is_emergency');
}
