<?php namespace App\Http\Controllers\Website;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class homeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	$currenturl = 'index';
		return view('website.home',compact('currenturl'));
	}

	public function aboutUs(){
		return view('website.aboutus');
	}

	public function whatWeCover(){
		return view('website.whatwecover');
	}

	public function whatNotCovered(){
		return view('website.whatnotcovered');
	}

	public function faq(){
		return view('website.faq');
	}

	public function plans(){
		return view('website.plans');
	}

	public function serviceForTheDog(){
		return view('website.serviceforthedog');
	}

	public function serviceForTheCat(){
		return view('website.serviceForTheCat');
	}
	public function forVeterinarians(){
		return view('website.forveterinarians');
	}

	public function contactUs(){
		return view('website.contactus');
	}

	public function requestQuote(){
		return view('website.join.step1');
	}

	public function termsAndConditions(){
		return view('website.termsandconditions');
	}
}
