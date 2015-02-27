<?php namespace App\Http\Controllers\Api;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class ApiController extends Controller {

	public static function getCities(){
		return $user = DB::table('cities')->lists('city','id');
	}

	public static function getCountries(){
		return $user = DB::table('countries')->lists('country_label','country_code');
	}
}
