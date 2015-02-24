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

Route::get('/', 'WelcomeController@index');

Route::get('/home', function(){

	if(Auth::user()->hasRole('Admin'))
		return Redirect::to('/admin');
	elseif(Auth::user()->hasRole('Veterinarian'))
		return Redirect::to('/veterinary');
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
		Route::post('/treatmentpost/',['as' => 'veterinary.treatment.post', 'uses' => 'Veterinary\Treatment\PetController@treatmentpost']);


		Route::group([
			'middleware' => 'pets.auth',
			'redirect' => 'veterinary/petlogout'
		],function(){
			Route::get('/pet/{id}',['as' => 'veterinary.pet.show', 'uses' => 'Veterinary\Treatment\PetController@show']);
			Route::post('/pet/{id}/event/',['as' => 'veterinary.event.show', 'uses' => 'Veterinary\Treatment\PetController@event']);

		});

	});
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
