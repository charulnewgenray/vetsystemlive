<?php namespace App\Models\Veterinary;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Treatments extends Model {

    protected $table = 'treatments';

    public function scopeTreatmentPost($query,$data){
        if(isset($data['emergency'])){

        }else{
            $data['emergency'] = 0;
        }
        $visits = DB::table('visits')->insert(
            array('event_id' => $data['event'] , 'visit_description' => $data['visit_description'] , 'is_emergency' => $data['emergency'],'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'))
        );
        $lastVisitId = DB::getPdo()->lastInsertId();
        $visitExaminations = DB::table('visit_examinations')->insert(
            array('visit_id' => $lastVisitId , 'exam_id' => $data['examination-id'] , 'value' => $data['examination-value'],'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'))
        );
        if(isset($data['covered-treatment'])){
            foreach($data['covered-treatment'] as $data1){
                $getTreatmentInfo = DB::table('treatments')->where('treatment_id','=',$data1)->first();
                $visitTreatments = DB::table('visit_treatments')->insert(
                    array('visit_id' => $lastVisitId ,'label' => $getTreatmentInfo->treatment_name,'price' => $getTreatmentInfo->treatment_price, 'treatment_id' => $data1 , 'covered' => '1','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'))
                );
            }
        }
        if(isset($data['not-covered-treatment'])){
            foreach($data['not-covered-treatment'] as $data1){
                $getTreatmentInfo = DB::table('treatments')->where('treatment_id','=',$data1)->first();
                $visitTreatments = DB::table('visit_treatments')->insert(
                    array('visit_id' => $lastVisitId ,'label' => $getTreatmentInfo->treatment_name,'price' => $getTreatmentInfo->treatment_price, 'treatment_id' => $data1 , 'covered' => '0','created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'))
                );
            }
        }

    }
}
