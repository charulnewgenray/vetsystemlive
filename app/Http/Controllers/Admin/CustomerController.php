<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin\Customer;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	$customers = Customer::all();
		return view('admin.customer.customers',['customers' => $customers]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{	$data = array();
		$customer = Customer::where('customer_id',$id)->first();
		$customerpet = DB::table('pets')->where('customer_id','=',$id)->first();
		$customerpetsanswer = DB::table('customer_pets_answer')->where('petid','=',$customerpet->pet_id)->get();
		return view('admin.customer.customer',compact('customer','customerpet','customerpetsanswer'));

	}


}
