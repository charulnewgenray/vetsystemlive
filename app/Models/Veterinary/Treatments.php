<?php namespace App\Models\Veterinary;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Treatments extends Model {

    protected $table = 'treatments';

    public function scopeExistEventTreatment($query,$data){
        if(isset($data['emergency'])){

        }else{
            $data['emergency'] = 0;
        }
        $visits = DB::table('visits')->insert(
            array('event_id' => $data['event'] , 'visit_description' => $data['visit_description'] , 'is_emergency' => $data['emergency'],'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'))
        );
        $lastVisitId = DB::getPdo()->lastInsertId();
        if($data['exam_id']){
            foreach($data['exam_id'] as $key => $exam_id){
                if($data['examination-label'][$key]  && $data['examination-value'][$key]){
                    $visitExaminations = DB::table('visit_examinations')->insert(
                        array('visit_id' => $lastVisitId , 'exam_id' => $exam_id ,'label' => $data['examination-label'][$key], 'value' => $data['examination-value'][$key],'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'))
                    );
                }

            }
        }

        if($data['attached-treatment']->getClientOriginalName()){
            if(!$data['file-label']){
                $data['file-label'] = "";
            }
            $treatmentAttachments = DB::table('treatment_attachments')->insert(
                array('visit_id' => $lastVisitId , 'label' => $data['file-label'] , 'file_path' => $data['attached-treatment']->getClientOriginalName(),'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'))
            );
        }

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

    public function scopeNewEventTreatment($query,$data){
        if(isset($data['emergency'])){

        }else{
            $data['emergency'] = 0;
        }
        $event = DB::table('events')->insert(
            array('pet_id' => Session::get('treatment.petid') , 'vet_id' => Auth::id() , 'name' => $data['new-event'],'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'))
        );
        $lastEventId = DB::getPdo()->lastInsertId();
        $visits = DB::table('visits')->insert(
            array('event_id' => $lastEventId , 'visit_description' => $data['visit_description'] , 'is_emergency' => $data['emergency'],'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'))
        );
        $lastVisitId = DB::getPdo()->lastInsertId();
        if($data['exam_id']){
            foreach($data['exam_id'] as $key => $exam_id){
                if($data['examination-label'][$key]  && $data['examination-value'][$key]){
                    $visitExaminations = DB::table('visit_examinations')->insert(
                        array('visit_id' => $lastVisitId , 'exam_id' => $exam_id ,'label' => $data['examination-label'][$key], 'value' => $data['examination-value'][$key],'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'))
                    );
                }

            }
        }
        if($data['attached-treatment']->getClientOriginalName()){
            if(!$data['file-label']){
                $data['file-label'] = "";
            }
            $treatmentAttachments = DB::table('treatment_attachments')->insert(
                array('visit_id' => $lastVisitId , 'label' => $data['file-label'] , 'file_path' => $data['attached-treatment']->getClientOriginalName(),'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s'))
            );
        }



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
