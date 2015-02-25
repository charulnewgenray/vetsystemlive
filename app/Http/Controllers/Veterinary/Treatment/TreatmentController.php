<?php namespace App\Http\Controllers\Veterinary\Treatment;

use App\Http\Requests;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Veterinary\Treatments;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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
	public function setTreatment(){
		$post = Input::all();
		$file = Input::file('attached-treatment');
		/*var_dump($file->getRealPath());
		die;*/
		//$destinationPath = 'uploads/';
		//$file->move($destinationPath,$file->getClientOriginalName());
		//die('success');
		/* if the form use the new event field */
		if($post['new-event-hidden']){
			$rules = array('new-event' => 'required');
		}else{
			$rules = array();
		}
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
		{
			return redirect()->back()->withErrors($validator);
		}else{
			if($post['new-event-hidden']){
				$treatmentPost = Treatments::NewEventTreatment($post);
				return redirect()->back()->with('message',"Request Pet not found please recheck your credentials");
			}else{
				$treatmentPost = Treatments::ExistEventTreatment($post);
                return redirect()->back()->with('message',"Request Pet not found please recheck your credentials");
			}
		}


	}

}
