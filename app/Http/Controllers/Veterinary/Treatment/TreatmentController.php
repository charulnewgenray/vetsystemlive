<?php namespace App\Http\Controllers\Veterinary\Treatment;

use App\Http\Requests;
use App\Models\Veterinary\Events;
use App\Models\Veterinary\Examinations;
use App\Models\Veterinary\TreatmentAttachments;
use App\Models\Veterinary\Veterinarians;
use App\Models\Veterinary\VisitExamination;
use App\Models\Veterinary\Visits;
use App\Models\Veterinary\VisitTreatments;
use Illuminate\Contracts\Queue\EntityNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Models\Veterinary\Treatments;
use Illuminate\Support\Facades\Session;


class TreatmentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * set the data for a particular event into the required tables
	 */
	public function submitClaim(){
		$post = Input::all();
		$treatments = Input::get('treatment');
		try{
			$vetid = Veterinarians::where('vet_email','=',Auth::user()->email)->pluck('vet_id');
			if($post['is-new-event']){
				$event = Events::create(array('pet_id' => Input::get('pet_id') , 'vet_id' => $vetid, 'name' => Input::get('new-event')));
				$event_id = $event->id;
			}else{
				$event_id = Input::get('event');
			}
			$visit = Visits::create(array('event_id'=> $event_id, 'visit_description' => Input::get('visit_description'),'is_emergency' => Input::get('is_emergency') ));
			$visit_id = $visit->id;
			foreach($treatments as $key => $value){
				$treatment = Treatments::where('treatment_id','=',$key)->first();
				VisitTreatments::create(['visit_id' => $visit_id , 'treatment_id' => $key ,'label' => $treatment->treatment_name , 'price' => $treatment->treatment_price ,'covered' =>  $value == 'covered'? 1 : 0]);
			}
			if(Input::get('examination')){
				$examinations = Input::get('examination');
				foreach($examinations  as $key => $value){
					$examination = Examinations::where('exam_id','=',$key)->first();
					VisitExamination::create(['visit_id' => $visit_id,'exam_id' => $examination->exam_id ,'label' => $examination->exam_name ,'value' => $value ]);
				}
			}

			if(Input::get('file')){
				$files = Input::get('files');
				foreach($files as $key => $value){
					TreatmentAttachments::create(['visit_id' => $visit_id,'label' => $value['title'], 'file_path' => $value['name']]);
				}
			}

			Session::put('claim_id',rand(1000,100000));
			return redirect()->back()->with('message' ,'101912212');
		}
		catch(EntityNotFoundException $e){

		}
	}

}
