<?php namespace App\Models\Veterinary;

use Illuminate\Database\Eloquent\Model;

class VisitTreatments extends Model {

    protected $table = 'visit_treatments';
    protected $fillable = array('visit_id','treatment_id','label','price','covered');
}
