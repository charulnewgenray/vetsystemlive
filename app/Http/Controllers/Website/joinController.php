<?php namespace App\Http\Controllers\Website;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Api\ApiController;
use Symfony\Component\HttpKernel\Exception;

class joinController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{	//Session::flush();
		Session::put('join.previousstep', 1);
		Session::put('join.currentstep', 1);

		$dogbreeds = DB::table('dog_breeds')->lists('label','id');
		$catbreeds = DB::table('cat_breeds')->lists('label','id');

		$mixeddog_id = DB::table('dog_breeds')->where('value','=','mixed')->pluck('id');
		$session = Session::put('join.mixeddog_id',$mixeddog_id);
		$session = Session::get('join.step1');
		return view('website.join.step1',compact('dogbreeds','catbreeds','mixeddog_id','session'));
	}

	public function showStep1()
	{
		$dogbreeds = DB::table('dog_breeds')->lists('label','id');
		$catbreeds = DB::table('cat_breeds')->lists('label','id');

		$mixeddog_id = DB::table('dog_breeds')->where('value','=','mixed')->pluck('id');
		$session = Session::put('join.mixeddog_id',$mixeddog_id);
		$session = Session::get('join.step1');
		return view('website.join.step1',compact('dogbreeds','catbreeds','mixeddog_id','session'));
	}

	public function step1(){
		Session::put('join.previousstep', 1);
		Session::put('join.currentstep', 1);

		Session::put('join.step1', Input::all());
		$v = Validator::make(Input::all() ,[
			'pet_name' => 'required | min:3',
			'pet_type' => 'required',
			'pet_age_year' => 'required | min:0 | max:6',
			'pet_age_month' => 'required | min:0 | max:12',
			'client_firstname' => 'required | min:3',
			'client_lastname' => 'required | min:3',
			'client_email' => 'required | email',
			'client_phone' => 'required'
		]);

		if($v->fails()){
			return redirect()->back()->withErrors($v->errors());
		}

		$packageprices  = $this->calulatePackage();
		$prices = array();
		foreach($packageprices as $price){
			$prices[$price->code] = array('label'=>$price->label,'price'=>$price->price);
		}

		$session = Session::get('join');
		Session::put('join.step2', $prices);
		Session::put('join.previousstep', 1);
		Session::put('join.currentstep', 2);
		return view('website.join.step2',compact('prices','session'));
	}

	function calulatePackage(){
		if(Input::get('pet_type') == 'dog') {
			$basePrice = DB::table('dog_price_factor')->select('code','label','price')->get();
			$sizefactor = array('1' => 'smalldog','2' => 'mediumdog','3' => 'bigdog','4' => 'hugedog');
			if(Input::get('dog_breed') == Session::get('join.mixeddog_id')){
				$additionalPrice = DB::table('price_factor')->where('age','=',Input::get('pet_age_year'))->pluck($sizefactor[Input::get('pet_size')]);
			}
			else{
				$dogsize = DB::table('dog_breeds')->where('id','=',Input::get('dog_breed'))->pluck('size');
				$additionalPrice = DB::table('price_factor')->where('age','=',Input::get('pet_age_year'))->pluck($sizefactor[$dogsize]);

			}
		}
		else if(Input::get('pet_type') == 'cat'){
			$basePrice = DB::table('cat_price_factor')->select('code','label','price')->get();
			if(Input::get('cat_breed') == Session::get('join.mixedcat_id')){
				$additionalPrice = DB::table('price_factor')->where('age','=',Input::get('pet_age_year'))->pluck('catmixed');
			}
			else{
				$additionalPrice = DB::table('price_factor')->where('age','=',Input::get('pet_age_year'))->pluck('catbreed');

			}
		}
		foreach($basePrice as $price){
			$price->price = (int)$price->price + (int)$additionalPrice;
		}
		return $basePrice ? $basePrice : null;
	}
	public function showStep2()
	{
		if (Session::get('join.currentstep') >= 2) {
			$prices = Session::get('join.step2');
			$session = Session::get('join');
			return view('website.join.step2', compact('prices', 'session'));
		}
		else{
			return $this->index();
		}
	}
	public function step2(){
		Session::put('join.previousstep', 1);
		Session::put('join.currentstep', 2);

		$cities = ApiController::getCities();

		$selected_package = Input::get('selected_package');
		$selected_price = Session::get('join.step2.'.$selected_package.'.price');

		Session::put('join.step2.selected_package',Input::get('selected_package'));
		Session::put('join.step2.selected_price',$selected_price);

		$session = Session::get('join');
		if(!$selected_price){
			return redirect()->back()->withErrors("Please Select a Package to proceed Further");
		}
		else{

			return view('website.join.step3',compact('prices','session','cities'));
		}
	}

	public function showStep3()
	{
		if (Session::get('join.currentstep') >= 3){
			$cities = ApiController::getCities();
			$prices = Session::get('join.step2');
			$session = Session::get('join');
			return view('website.join.step3', compact('prices', 'session', 'cities'));
		}
		else{
			return $this->index();
		}
	}
	public function step3(){
		Session::put('join.previousstep', 2);
		Session::put('join.currentstep', 3);

		Session::put('join.step3', Input::all());

		$v = Validator::make(Input::all(),[
			'client_firstname' => 'required | min:2',
			'client_lastname' => 'required | min:2',
			'client_city' => 'required',
			'client_address' => 'required',
			'client_zip' => 'required',
			'client_mobile' => 'required | numeric',
			'email' => 'required | email | unique:users',
			'client_password' => 'required | min:6',
			'client_phone' => 'required | min:6'

		]);

		if($v->fails()){
			return redirect()->back()->withErrors($v->errors());
		}
		else{
			$status = $this->processForm();
			if($status['status'] == 'SUCCESS'){
				$session = Session::get('join');
				$session = Session::get('join');
				$healthDeclarations = DB::table('health_declaration')->select('id','label','value')->get();
				$healthQuestions = DB::table('health_questions')->select('id','label','value')->get();
				$illnessQuestions = DB::table('illness_questions')->select('id','label','value')->get();
				$generalQuestions = DB::table('general_questions')->select('id','label','value')->get();

				if(Session::get('join.step.pet_type') == 'cat'){
					$catQuestions = DB::table('cat_questions')->lists('value','label');
				}
				else
					$catQuestions = null;

				return view('website.join.step4', compact('session', 'healthDeclarations','healthQuestions','catQuestions','illnessQuestions','generalQuestions'));
			}
			else{
				return redirect()->back()->withErrors($status);
			}
		}
	}

	public function processForm(){
		$userId = $this->createUser();
		Session::put('join.user_id',$userId);
		if($userId){
			$clientId = $this->createClient($userId);
			Session::put('join.client_id',$clientId);
			if($clientId){
				$petId = $this->createPet($clientId);
				Session::put('join.pet_id',$petId);
				if($petId){
					return ['status' => 'SUCCESS', 'message' => 'You application has been submitted'];
				}
				else{
					return ['status' => 'FAILED','message' => 'Pet Infomation could not be updated ,Please contact administrator'];
				}
			}else{
				return ['status' => 'FAILED','message' => 'Your information could not be submitted,Please contact administrator'];
			}
		}
		else{
			return ['status' => 'failed','message' => 'User could not be created,Please contact administrator'];
		}
	}

	public function createUser(){

		$id = DB::table('users')->insertGetId(
			['name' => Input::get('client_firstname'), 'email' => Input::get('email'), 'password' => Hash::make(Input::get('client_password')), 'status' => 0]
		);
		return $id;
	}


	public function createClient($userid){
		$id = DB::table('customers')->insertGetId(
			[ 'user_id' => $userid, 'first_name' => Input::get('client_firstname'), 'last_name' => Input::get('client_lastname'), 'address' => Input::get('client_address'),
				'city_code' => Input::get('client_city'),'country_code' => 'IL', 'post_code' => Input::get('client_zip'), 'primary_phone' => Input::get('client_mobile'),
				'secondary_phone' => Input::get('client_phone'), 'email' => Input::get('email')
			]
		);
		return $id;
	}

	public function createPet($clientId){
		if(Session::get('join.step1.pet_type') == 'dog')
			$breed_id = Session::get('join.step1.dog_breed');
		else
			$breed_id = Session::get('join.step1.cat_breed');

		$id = DB::table('pets')->insertGetId(
			['customer_id' => $clientId, 'pet_type' => Session::get('join.step1.pet_type'), 'pet_name' => Session::get('join.step1.pet_name'), 'age_year' => Session::get('join.step1.pet_age_year'),
				'age_month' =>  Session::get('join.step1.pet_age_month'), 'breed_id' => $breed_id
			]

		);
		return $id;
	}

	public function step4(){
		$petid = Input::get('pet_id');
		if(Input::get('pet_id')){
			try{
				DB::table('pets')->where('pet_id',$petid)->update(array(
						'chip' => Input::get('pet_chipnumber'),
						'gender' => Input::get('pet_gender'),
						'castrated' => Input::get('castrated')
					)
				);
			}
			catch(Exception $e){
				$result = "There was some error processing you request , we will get back to you soon.";
				Session::flush();
				return view('website.join.step5',['result' => $result]);
			}

			$healthQuestions = DB::table('health_questions')->lists('label','id');
			$insertArray = array();
			foreach(Input::get('health_quest') as $key => $value){
				$insertArray[] = array('petid' => $petid,'title'=>'Health' ,'label' => $healthQuestions[$key],'value' => $value);
			}
			if(Input::get('visited_vet') == 'yes'){
				$insertArray[] = array('petid' => $petid,'title'=>'Visited Vet' ,'label' => 'Visited Vet','value' => 'yes');
				$illnessQuestions = DB::table('illness_questions')->lists('label','id');
				foreach(Input::get('illness_quest') as $key => $value){
					$insertArray[] = array('petid' => $petid,'title'=>'Illness' ,'label' => $illnessQuestions[$key],'value' => $value);
				}

			}else{
				$insertArray[] = array('petid' => $petid,'title'=>'Visited Vet' ,'label' => 'Visited Vet','value' => 'No');
			}
			$generalQuestions = DB::table('general_questions')->lists('label','id');
			foreach(Input::get('general_quest') as $key => $value){
				$insertArray[] = array('petid' => $petid,'title'=>'General Health' ,'label' => $generalQuestions[$key],'value' => $value);
			}

			try{
				DB::table('customer_pets_answer')->insert($insertArray);
				$result = "תודה על הצטרפותך הרשמתך התקבלה, אנחנו נחזור אלייך בהקדם לאישור השירות";
				Session::flush();
				return view('website.join.step5',['result' => $result]);
			}
			catch(Exception $e) {
				$result = "There was some error processing you request , we will get back to you soon.";
				Session::flush();
				return view('website.join.step5',['result' => $result]);
			}

		}
		else{


		}

	}

	public function showStep4(){
		$session = Session::get('join');
		$healthDeclarations = DB::table('health_declaration')->select('id','label','value')->get();
		$healthQuestions = DB::table('health_questions')->select('id','label','value')->get();
		$illnessQuestions = DB::table('illness_questions')->select('id','label','value')->get();
		$generalQuestions = DB::table('general_questions')->select('id','label','value')->get();


		if(Session::get('join.step.pet_type') == 'cat'){
			$catQuestions = DB::table('cat_questions')->lists('value','label');
		}
		else
			$catQuestions = null;

		return view('website.join.step4', compact('session', 'healthDeclarations','healthQuestions','catQuestions','illnessQuestions','generalQuestions'));
	}

	public function showStep5(){
		return redirect('/');
	}

}
