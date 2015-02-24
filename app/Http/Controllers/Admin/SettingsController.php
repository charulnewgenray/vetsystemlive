<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Rappasoft\Vault\Services\Validators\Rules\Auth\User\Update;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
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
		$classname = 'get_'.$id;
		return $this->$classname();
	}
/*
 * DOG PRICE FACTOR
 */
	public function get_dog_price_factor(){
		$dogpricefactor = DB::table('dog_price_factor')->get();
		return view('admin.settings.dog_price_factor',compact('dogpricefactor'));
	}
	public function update_dog_price_factor($id,$request){
		try {
			foreach($request['data'] as $data){
				if($data['price'] == null)
					return redirect()->back()->withErrors("Price can not be null");
				elseif(!is_numeric($data['price']))
					return redirect()->back()->withErrors("Please enter numeric values");
				$results = DB::update("update $id set price = ? where id = ?", [(float)$data['price'],$data['id']]);
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		$classname = 'get_'.$id;
		return $this->$classname();
	}

/**
 * CAT PRICE FACTOR
 */
	public function get_cat_price_factor(){
		$catpricefactor = DB::table('cat_price_factor')->get();
		return view('admin.settings.cat_price_factor',compact('catpricefactor'));
	}
	public function update_cat_price_factor($id,$request){
		try {
			foreach($request['data'] as $data){
				if($data['price'] == null)
					return redirect()->back()->withErrors("Price can not be null");
				elseif(!is_numeric($data['price']))
					return redirect()->back()->withErrors("Please enter numeric values");
				$results = DB::update("update $id set price = ? where id = ?", [(float)$data['price'],$data['id']]);
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		$classname = 'get_'.$id;
		return $this->$classname();
	}
/*
 * Dog Breeds
 */
	public function get_dog_breeds(){
		$dogbreeds = DB::table('dog_breeds')->get();
		return view('admin.settings.dog_breeds',compact('dogbreeds'));
	}

	public function update_dog_breeds($id,$request){
		try {
			$v = Validator::make(Input::all(),
				['label' => 'required|max:255',
					'value' => 'required|min:3',
					'size' => 'required|integer']
			);
			if ($v->fails())
			{
				return redirect()->back()->withErrors($v->errors());
			}
			else{
				$results = DB::table($id)->where('id',Input::get('id'))
					->update(['label' => Input::get('label'),'value' => Input::get('value'), 'size' => Input::get('size')]);
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		return Redirect::back()->withInput()->withFlashSuccess('Item has been updated successfully');
	}

	public function create_dog_breeds($id,$data){
		try {
			$v = Validator::make(Input::all(),
					['label' => 'required|max:255',
					'value' => 'required|min:3',
					'size' => 'required|integer']
				);
			if ($v->fails())
			{
				return redirect()->back()->withErrors($v->errors());
			}
			else{
				$results = DB::table($id)->insert(
					array('label' => $data['label'], 'value' => $data['value'], 'size' => $data['size'])
				);
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		return Redirect::back()->withInput()->withFlashSuccess('Item has been added successfully');
	}

	/*
     * Cat Breeds
     */
	public function get_cat_breeds(){
		$catbreeds = DB::table('cat_breeds')->get();
		return view('admin.settings.cat_breeds',compact('catbreeds'));
	}

	public function update_cat_breeds($id,$request){
		try {
			$v = Validator::make(Input::all(),
				['label' => 'required|max:255',
					'value' => 'required|min:3',
					]
			);
			if ($v->fails())
			{
				return redirect()->back()->withErrors($v->errors());
			}
			else{
				$results = DB::table($id)->where('id',Input::get('id'))
					->update(['label' => Input::get('label'),'value' => Input::get('value')]);
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		return Redirect::back()->withInput()->withFlashSuccess('Item has been updated successfully');
	}

	public function create_cat_breeds($id,$data){
		try {
			$v = Validator::make(Input::all(),
				['label' => 'required|max:255',
					'value' => 'required|min:3'
					]
			);
			if ($v->fails())
			{
				return redirect()->back()->withErrors($v->errors());
			}
			else{
				$results = DB::table($id)->insert(
					array('label' => $data['label'], 'value' => $data['value'])
				);
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		return Redirect::back()->withInput()->withFlashSuccess('Item has been added successfully');
	}

	/*
     * Health Questions
     */
	public function get_health_questions(){
		$healthquestions = DB::table('health_questions')->get();
		return view('admin.settings.health_questions',compact('healthquestions'));
	}

	public function update_health_questions($id,$request){
		try {
			$v = Validator::make(Input::all(),
				['label' => 'required|max:255',
					'value' => 'required|min:3',
				]
			);
			if ($v->fails())
			{
				return redirect()->back()->withErrors($v->errors());
			}
			else{
				$results = DB::table($id)->where('id',Input::get('id'))
					->update(['label' => Input::get('label'),'value' => Input::get('value')]);
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		return Redirect::back()->withInput()->withFlashSuccess('Item has been updated successfully');
	}

	public function create_health_questions($id,$data){
		try {
			$v = Validator::make(Input::all(),
				['label' => 'required|max:255',
					'value' => 'required|min:3'
				]
			);
			if ($v->fails())
			{
				return redirect()->back()->withErrors($v->errors());
			}
			else{
				$results = DB::table($id)->insert(
					array('label' => $data['label'], 'value' => $data['value'])
				);
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		return Redirect::back()->withInput()->withFlashSuccess('Item has been added successfully');
	}

	/*
     * Cat Questions
     */
	public function get_cat_questions(){
		$catquestions = DB::table('cat_questions')->get();
		return view('admin.settings.cat_questions',compact('catquestions'));
	}

	public function update_cat_questions($id,$request){
		try {
			$v = Validator::make(Input::all(),
				['label' => 'required|max:255',
					'value' => 'required|min:3',
				]
			);
			if ($v->fails())
			{
				return redirect()->back()->withErrors($v->errors());
			}
			else{
				$results = DB::table($id)->where('id',Input::get('id'))
					->update(['label' => Input::get('label'),'value' => Input::get('value')]);
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		return Redirect::back()->withInput()->withFlashSuccess('Item has been updated successfully');
	}

	public function create_cat_questions($id,$data){
		try {
			$v = Validator::make(Input::all(),
				['label' => 'required|max:255',
					'value' => 'required|min:3'
				]
			);
			if ($v->fails())
			{
				return redirect()->back()->withErrors($v->errors());
			}
			else{
				$results = DB::table($id)->insert(
					array('label' => $data['label'], 'value' => $data['value'])
				);
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		return Redirect::back()->withInput()->withFlashSuccess('Item has been added successfully');
	}

	/*
     * illness- Questions
     */
	public function get_illness_questions(){
		$illnessquestions = DB::table('illness_questions')->get();
		return view('admin.settings.illness_questions',compact('illnessquestions'));
	}

	public function update_illness_questions($id,$request){
		try {
			$v = Validator::make(Input::all(),
				['label' => 'required|max:255',
					'value' => 'required|min:3',
				]
			);
			if ($v->fails())
			{
				return redirect()->back()->withErrors($v->errors());
			}
			else{
				$results = DB::table($id)->where('id',Input::get('id'))
					->update(['label' => Input::get('label'),'value' => Input::get('value')]);
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		return Redirect::back()->withInput()->withFlashSuccess('Item has been updated successfully');
	}

	public function create_illness_questions($id,$data){
		try {
			$v = Validator::make(Input::all(),
				['label' => 'required|max:255',
					'value' => 'required|min:3'
				]
			);
			if ($v->fails())
			{
				return redirect()->back()->withErrors($v->errors());
			}
			else{
				$results = DB::table($id)->insert(
					array('label' => $data['label'], 'value' => $data['value'])
				);
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		return Redirect::back()->withInput()->withFlashSuccess('Item has been added successfully');
	}

	/*
     * General- Questions
     */
	public function get_general_questions(){
		$generalquestions = DB::table('general_questions')->get();
		return view('admin.settings.general_questions',compact('generalquestions'));
	}

	public function update_general_questions($id,$request){
		try {
			$v = Validator::make(Input::all(),
				['label' => 'required|max:255',
					'value' => 'required|min:3',
				]
			);
			if ($v->fails())
			{
				return redirect()->back()->withErrors($v->errors());
			}
			else{
				$results = DB::table($id)->where('id',Input::get('id'))
					->update(['label' => Input::get('label'),'value' => Input::get('value')]);
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		return Redirect::back()->withInput()->withFlashSuccess('Item has been updated successfully');
	}

	public function create_general_questions($id,$data){
		try {
			$v = Validator::make(Input::all(),
				['label' => 'required|max:255',
					'value' => 'required|min:3'
				]
			);
			if ($v->fails())
			{
				return redirect()->back()->withErrors($v->errors());
			}
			else{
				$results = DB::table($id)->insert(
					array('label' => $data['label'], 'value' => $data['value'])
				);
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		return Redirect::back()->withInput()->withFlashSuccess('Item has been added successfully');
	}

	/*
     * Messages
     */
	public function get_messages(){
		$messages = DB::table('messages')->get();
		return view('admin.settings.messages',compact('messages'));
	}

	public function update_messages($id,$request){
		try {
			$v = Validator::make(Input::all(),
				['label' => 'required|max:255',
					'value' => 'required|min:3',
				]
			);
			if ($v->fails())
			{
				return redirect()->back()->withErrors($v->errors());
			}
			else{
				$results = DB::table($id)->where('id',Input::get('id'))
					->update(['label' => Input::get('label'),'value' => Input::get('value')]);
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		return Redirect::back()->withInput()->withFlashSuccess('Item has been updated successfully');
	}

	public function create_messages($id,$data){
		try {
			$v = Validator::make(Input::all(),
				['label' => 'required|max:255',
					'value' => 'required|min:3'
				]
			);
			if ($v->fails())
			{
				return redirect()->back()->withErrors($v->errors());
			}
			else{
				$results = DB::table($id)->insert(
					array('label' => $data['label'], 'value' => $data['value'])
				);
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		return Redirect::back()->withInput()->withFlashSuccess('Item has been added successfully');
	}

	/*
     * Price Factor
     */
	public function get_price_factor(){
		$pricefactors = DB::table('price_factor')->get();
		return view('admin.settings.price_factor',compact('pricefactors'));
	}

	public function update_price_factor($id,$request){
		try {
			$v = Validator::make(Input::all(),
				[	'age' => 'required|Integer',
					'smalldog' => 'required|Numeric',
					'mediumdog' => 'required|Numeric',
					'bigdog' => 'required|Numeric',
					'hugedog' => 'required|Numeric',
					'catbreed' => 'required|Numeric',
					'catmixed' => 'required|Numeric',
				]
			);
			if ($v->fails())
			{
				return redirect()->back()->withErrors($v->errors());
			}
			else{
				$results = DB::table($id)->where('id',Input::get('id'))
					->update([
						'age' => Input::get('age'),
						'smalldog' => Input::get('smalldog'),
						'mediumdog' => Input::get('mediumdog'),
						'bigdog' => Input::get('bigdog'),
						'hugedog' => Input::get('hugedog'),
						'catbreed' => Input::get('catbreed'),
						'catmixed' => Input::get('catmixed')
					]);
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		return Redirect::back()->withInput()->withFlashSuccess('Item has been updated successfully');
	}

	public function create_price_factor($id,$data){
		try {
			$v = Validator::make(Input::all(),
				[	'age' => 'required|Integer',
					'smalldog' => 'required|Numeric',
					'mediumdog' => 'required|Numeric',
					'bigdog' => 'required|Numeric',
					'hugedog' => 'required|Numeric',
					'catbreed' => 'required|Numeric',
					'catmixed' => 'required|Numeric'
				]
			);
			if ($v->fails())
			{
				return redirect()->back()->withErrors($v->errors());
			}
			else{
				$results = DB::table($id)->insert(
					array(
						'age' => $data['age'],
						'smalldog' => $data['smalldog'],
						'mediumdog' => $data['mediumdog'],
						'bigdog' => $data['bigdog'],
						'hugedog' => $data['hugedog'],
						'catbreed' => $data['catbreed'],
						'catmixed' => $data['catmixed']
					)
				);
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		return Redirect::back()->withInput()->withFlashSuccess('Item has been added successfully');
	}
	/**
 * STORE
 */
	public function store(Request $request){
		$data = Request::capture()->all();
		$id = str_replace("-","_",$data['urlkey']);
		$classname = 'update_'.$id;
		return $this->$classname($id,$data);
	}

	public function create(Request $request){
		$data = Request::capture()->all();
		$id = str_replace("-","_",$data['urlkey']);
		$classname = 'create_'.$id;
		return $this->$classname($id,$data);
	}

	public function delete(Request $request){
		$data = Request::capture()->all();
		$table = str_replace("-","_",$data['urlkey']);
		$id = Input::get('id');
		try {
			if(Input::get('_method') == 'DELETE' && isset($id) && isset($table)){
				DB::table($table)->where('id','=',$id)->delete();
			}
			else{
				return Redirect::back()->withInput()->withFlashDanger('Some this went wrong please try again');
			}
		} catch(EntityNotValidException $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->validationErrors());
		} catch(Exception $e) {
			return Redirect::back()->withInput()->withFlashDanger($e->getMessage());
		}
		return Redirect::back()->withInput()->withFlashSuccess('Item has been deleted');
	}
}
