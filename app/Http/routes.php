<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/login', 'welcomeController@index');
Route::get('/', 'website\HomeController@index');
Route::get('about-us', 'website\HomeController@aboutUs');
Route::get('what-we-cover', 'website\HomeController@whatWeCover');
Route::get('what-not-covered', 'website\HomeController@whatNotCovered');
Route::get('faq', 'website\HomeController@faq');
Route::get('plans', 'website\HomeController@plans');
Route::get('Service-for-the-dog', 'website\HomeController@serviceForTheDog');
Route::get('Service-for-the-cat', 'website\HomeController@serviceForTheCat');
Route::get('for-Veterinarians', 'website\HomeController@forVeterinarians');
Route::get('contact-us', 'website\HomeController@contactUs');
Route::get('request-quote', 'website\JoinController@index');
Route::get('terms-and-conditions', 'website\HomeController@termsAndConditions');
Route::get('join', 'website\JoinController@index');

Route::get('join/1','website\JoinController@showStep1');
Route::get('join/2','website\JoinController@showStep2');
Route::get('join/3','website\JoinController@showStep3');
Route::get('join/4','website\JoinController@showStep4');
Route::get('join/5','website\JoinController@showStep5');

Route::post('join/2',['as' => 'join.step2', 'uses' => 'website\JoinController@step1']);
Route::post('join/3',['as' => 'join.step3', 'uses' => 'website\JoinController@step2']);
Route::post('join/4',['as' => 'join.step4', 'uses' => 'website\JoinController@step3']);
Route::post('join/5',['as' => 'join.step5', 'uses' => 'website\JoinController@step4']);

Route::get('api/city',['as' => 'city','uses' => 'Api\VeterinaryController@store']);

Route::get('/home', function(){

	if(Auth::user()->hasRole('Admin'))
		return Redirect::to('/admin');
	elseif(Auth::user()->hasRole('Veterinarian'))
		return Redirect::to('/veterinary');
	elseif(Auth::user()->hasRole('Customer'))
		return Redirect::to('/customer');
	elseif(Auth::user()->hasRole('Administrator'))
		return Redirect::to('/access/users');
	else return Redirect::to('/');

});

Route::group([
	'middleware' => 'vault.routeNeedsRole',
	'role' => ['Administrator'],
	//'redirect' => 'auth/login',
	'with' => ['error', 'You do not have access to do that.']
], function()
{
	Route::group(['prefix' => 'access'], function ()
	{
		/*Administrator Management*/
		Route::resource('users', '\Rappasoft\Vault\Http\Controllers\UserController', ['except' => ['show']]);
	});
});
Route::group([
	'middleware' => 'vault.routeNeedsRole',
	'role' => ['Admin'],
	'redirect' => 'auth/login',
	'with' => ['error', 'You do not have access to do that.']
], function()
{
	Route::group(['prefix' => 'admin'], function ()
	{
		/*Admin Management*/
		Route::get('/',['as' => 'admin.dashboard.index','uses' => 'Admin\DashboardController@index']);
		Route::get('/customers',['as' => 'admin.customers.index','uses' => 'Admin\CustomerController@index']);
		Route::get('/customers/{id}',['as' => 'admin.customers.show','uses' => 'Admin\CustomerController@show']);
		Route::get('/settings/{id}',['as' => 'admin.settings.show','uses' => 'Admin\SettingsController@show']);
		Route::put('/settings/{id}',['as' => 'admin.settings.store','uses' => 'Admin\SettingsController@store']);
		Route::post('/settings/{id}',['as' => 'admin.settings.create','uses' => 'Admin\SettingsController@create']);
		Route::delete('/settings/{id}',['as' => 'admin.settings.delete','uses' => 'Admin\SettingsController@delete']);

		/*Veterinary Management*/
		Route::get('/veterinary',['as' => 'admin.veterinary.index','uses' => 'Admin\VeterinaryController@index']);
		Route::get('/physician',['as' => 'admin.veterinary.create','uses' => 'Admin\VeterinaryController@create']);
		Route::get('/physician/{id}',['as' => 'admin.veterinary.show','uses' => 'Admin\VeterinaryController@show']);
		Route::put('/veterinary',['as' => 'admin.veterinary.store','uses' => 'Admin\VeterinaryController@store']);

	});
});

Route::group([
	'middleware' => 'vault.routeNeedsRole',
	'role' => ['Veterinarian'],
	'redirect' => 'auth/login',
	'with' => ['error', 'You do not have access to do that.']
], function()
{
	Route::group(['prefix' => 'veterinary'], function ()
	{
		/*veterinary Management*/
		Route::get('/',['as' => 'veterinary.dashboard', 'uses' => 'Veterinary\DashboardController@index']);
		Route::get('/pet/',['as' => 'veterinary.pet.index', 'uses' => 'Veterinary\Treatment\PetController@index']);
		Route::post('/pet/',['as' => 'veterinary.pet.petlogin', 'uses' => 'Veterinary\Treatment\PetController@petlogin']);
		Route::get('/petlogout',['as' => 'veterinary.pet.petlogout', 'uses' => 'Veterinary\Treatment\PetController@petlogout']);

		Route::group([
			'middleware' => 'pets.auth',
			'redirect' => 'veterinary/petlogout'
		],function(){
			Route::get('/pet/{id}',['as' => 'veterinary.pet.show', 'uses' => 'Veterinary\Treatment\PetController@show']);
			Route::post('/pet/{id}/event/',['as' => 'veterinary.event.show', 'uses' => 'Veterinary\Treatment\EventController@getEvent']);
			Route::post('/pet/{id}/submitClaim/',['as' => 'veterinary.pet.submitClaim', 'uses' => 'Veterinary\Treatment\TreatmentController@submitClaim']);
		});
	});
});

Route::group([
	'middleware' => 'vault.routeNeedsRole',
	'role' => ['Customer'],
	'redirect' => 'auth/login',
	'with' => ['error', 'You do not have access to do that.']
], function()
{
	Route::group(['prefix' => 'customer'], function ()
	{
		/*customer Management*/
		Route::get('/',['as' => 'customer.dashboard', 'uses' => 'Customer\DashboardController@index']);
		Route::get('/info/',['as' => 'customer.customer.index', 'uses' => 'Customer\CustomerController@index']);
		Route::get('/policy/',['as' => 'customer.customer.policy', 'uses' => 'Customer\CustomerController@policy']);
		Route::get('/account/',['as' => 'customer.customer.getAccount', 'uses' => 'Customer\CustomerController@getAccount']);
		Route::post('/account/',['as' => 'customer.customer.postAccount', 'uses' => 'Customer\CustomerController@postAccount']);
	});
});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
