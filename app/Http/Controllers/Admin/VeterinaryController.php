<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Api\ApiController;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Admin\Veterinarians;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class VeterinaryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	$physicians = Veterinarians::all();
		return view('admin.veterinary.physicians',compact('physicians'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	$empty = array("" => "");
		$cities = ApiController::getCities();
		$cities = array_merge($empty,$cities);

		$countries = ApiController::getCountries();
		$countries = array_merge($empty,$countries);

		return view('admin.veterinary.createphysician',compact('cities','countries'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(){
		$rule = [
			'vet_firstname' => 'required|min:2',
			'vet_lastname' => 'required|min:2',
			'vet_dob' => 'required',
			'vet_email' => 'required|email|unique:Veterinarians',
			'vet_phone' => 'required',
			'vet_gender' => 'required',
			'vet_address_1' => 'required',
			'vet_address_2' => 'required',
			'vet_city' => 'required',
			'vet_country' => 'required',
			'vet_postcode' => 'required',
			'vet_clinic' => 'required'
		];
		$v = Validator::make(Input::all(),$rule);
		if($v->fails()){

			return redirect()->back()->withErrors($v->errors());
		}
		else{
			$result = Veterinarians::create(Input::all());
			return redirect()->back()->withSuccess($result);
		}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$physician = Veterinarians::where('vet_id','=',$id)->first();
		return view('admin.veterinary.physician',compact('physician'));
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

}
