<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SettingsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.settings.settings');
	}
	public function show($id)
	{	$data = array();
		$id = str_replace("-","_",$id);
		$settings = DB::table($id)->get();
		return view('admin.settings.settings',compact('settings'));

	}


}
