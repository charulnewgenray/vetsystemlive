<?php namespace App\Models\Veterinary;

use Illuminate\Database\Eloquent\Model;

class VisitExamination extends Model {

	protected $table = 'visit_examinations';
    protected $fillable = array('visit_id','exam_id','label','value','created_at','updated_at');
    public $timestamps = true;

}
