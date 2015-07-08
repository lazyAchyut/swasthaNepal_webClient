<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as'=>'home', function()
{
	if(Auth::check())
	{
		return Redirect::intended('admin/dashboard');
	}
	else
		return View::make('before_login.welcome');
}));




// for search disease from header
Route::post('/searchresults', 'BeforeLoginController@searchDiseaseByName');

// get specific disease detail
Route::get('/disease/{id}','BeforeLoginController@getDisease');


// organization profile
Route::get('/organization/{org_code}','OrganizationController@getOrganization');


// for login
Route::get('/login',function(){
	if(Auth::check())
		return Redirect::to('admin/dashboard');
	else
		return View::make('before_login.login');
});





Route::post('/login',function(){
	$credentials = Input::only('password');
	if(Auth::attempt($credentials)){
		Session::put('org_code','123');
		return Redirect::intended('/');
	}
	else
		return Redirect::to('login')->with('errors','Wrong credentials!!');

});






Route::get('/logout',function(){
	Auth::logout();
	return Redirect::to('/');
});







// filter for all admin prefix
Route::filter('admin',array(
	'before'=>'auth',
	function(){
		return Redirect::intended('admin/dashboard');
	}));

Route::when('admin/*', 'auth');



Route::get('admin/adddisease',array('as'=>'adddisease',function(){
	return View::make('after_login.adddisease');
}));

Route::post('admin/adddisease','DashboardController@addDisease');

Route::get('admin/dashboard',function(){
	return View::make('after_login.dashboard');
});


Route::get('admin/mycontribution',array('as'=>'contribution','uses'=>'DashboardController@myContribution'));

Route::post('admin/edit','DashboardController@editContribution');

Route::post('admin/update-disease-info','DashboardController@updateDiseaseInfo');


// for organizational detail update form display
Route::get('admin/update-organization',array('as'=>'update-organization','uses'=> 'OrganizationController@editOrganization'));

// for actula update
Route::post('admin/update-organization','OrganizationController@updateOrganization');


Route::post('admin/delete','DashboardController@deleteContribution');











// 404 error handling
App::missing(function($exception)
{
	return " <p><h1>404 Error Page not found. </h1></p>";
});