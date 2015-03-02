<?php namespace App\Http\Controllers\Veterinary\Treatment;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Veterinary\Visits;

use Illuminate\Http\Request;

class EventController extends Controller {

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
	 This function is used to show the details of visits and last vaccinations
	  against an event id requested from ajax .
	 */
	public function getEvent(){
		$visitsHtml = "";
		$lastVaccinationsHtml = "";
		$visits = Visits::where('event_id','=',Input::get('event_id'))->get();
		foreach($visits as $visit){
			$createdDate = date('d F Y',strtotime($visit->created_at));
			$visitsHtml .= "<div class='row'>";
			$visitsHtml .= '<label class="col-xs-4 control-label" dir="ltr">'."$createdDate".'</label>';
			$visitsHtml .= '<div class="col-xs-8"><p class="form-control-static">'."$visit->visit_description".'</p></div>';
			$visitsHtml .= "</div>";
		}

		$html = array('visits'=>$visitsHtml);
		echo json_encode($html);
	}

}
