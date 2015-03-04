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
		return $user = DB::table('countries')->select('country_label','country_code')->get();
	}

	public static function getCityByCode($code)
	{
		$cityName = DB::table('cities')->select('city')->where('id', $code)->first();
		return $cityName;

	}

	public static function getCountryByCode($code)
	{
		$countryName = DB::table('countries')->select('country_label')->where('country_code', $code)->first();
		return $countryName;

	}
}
