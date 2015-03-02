<?php namespace App\Models\Veterinary;

use Illuminate\Database\Eloquent\Model;

class TreatmentAttachments extends Model {

	protected $table = 'treatment_attachments';
    protected $fillable = array('visit_id','label','file_path','created_at','updated_at');
}
