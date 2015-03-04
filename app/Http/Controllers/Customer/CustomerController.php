<?php namespace App\Http\Controllers\Customer;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Admin\Customer;
use App\Models\Admin\Order;
use App\Models\Veterinary\Pets;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Api\ApiController;

class CustomerController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$customer = Customer::where('user_id', Auth::id())->first();
		$cityName = ApiController::getCityByCode($customer->city_code);
		$countryName = ApiController::getCountryByCode($customer->country_code);
		return view('customer.show', compact('customer', 'cityName', 'countryName'));

	}

	/**
	 * Display a listing of the policies.
	 *
	 * @return Response
	 */
	public function policy()
	{
		$customer = Customer::select('customer_id')->where('user_id', Auth::id())->first();
		if ($customer->customer_id) {
			$policies = Order::select('orders.package_name', 'orders.package_type', 'orders.card_number', 'orders.card_cvv',
				'orders.card_exp', 'orders.order_total', 'orders.payment_status', 'orders.customer_id', 'orders.created_at', 'pets.pet_name',
				'policies.policy_number')
				->join('pets', 'orders.pet_id', '=', 'pets.pet_id')
				->join('policies', 'orders.order_id', '=', 'policies.order_id')
				->where('orders.customer_id', '=', $customer->customer_id)->get();
		}
		return view('customer.policy', compact('policies'));

	}

	/**
	 * Display a form to change in personal information.
	 *
	 * @return Response
	 */
	public function getAccount()
	{
		$token = Session::get('_token');
		$customer = Customer::where('user_id', Auth::id())->first();
		$cities = ApiController::getCities();
		$countries = ApiController::getCountries();
		return view('customer.account', compact('customer','token','cities','countries'));

	}

	public function postAccount(){
		$post = Input::all();
		if($post['password']){
			$password = Hash::make($post['password']);
			$update = Customer::where('customer_id','=',$post['customer_id'])
				->update(array('first_name'=>$post['first_name'],'last_name'=>$post['last_name'],'email'=>$post['email'],
					'primary_phone'=>$post['primary_phone'],'address'=>$post['address'],'post_code'=>$post['post_code'],
					'secondary_phone'=>$post['secondary_phone'],'gender'=>$post['gender'],'city_code'=>$post['city'],
					'country_code'=>$post['country_code']));
			$updateUser = DB::table('users')->where('id','=',$post['user_id'])
						->update(array('password'=>$password));
		}else{
			$update = Customer::where('customer_id','=',$post['customer_id'])
				->update(array('first_name'=>$post['first_name'],'last_name'=>$post['last_name'],'email'=>$post['email'],
					'primary_phone'=>$post['primary_phone'],'address'=>$post['address'],'post_code'=>$post['post_code'],
					'secondary_phone'=>$post['secondary_phone'],'gender'=>$post['gender'],'city_code'=>$post['city'],
					'country_code'=>$post['country_code']));
		}
		return redirect()->back()->with('flash_success', 'Information updated successfully.');
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

}
