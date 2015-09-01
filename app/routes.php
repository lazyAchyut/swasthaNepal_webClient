<?php

/*
|--------------------------------------------------------------------------
| Application Routes of Swastha Nepal Web Client
|--------------------------------------------------------------------------
*/

// home page
Route::get('/', array('as'=>'home', function()
{
	if(Auth::check())
	{
		return Redirect::intended('admin/dashboard');
	}
	else
		return View::make('before_login.welcome');
}));



// route to about-us page
Route::get('/about-us',array('as'=>'about-us' , function(){
	return View::make('before_login.about_us');
}));



//route to contact-us page
Route::get('/contact-us',array('as'=>'contact-us' , function(){
	return View::make('before_login.contact_us');
}));


// for search disease from header[navigation bar]
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




//validating login, on successful redirects to dashboard else redirect to login page
Route::post('/login',function(){
	$credentials = Input::only('password');
	if(Auth::attempt($credentials)){
		Session::put('org_code','123');
		return Redirect::intended('/');
	}
	else
		return Redirect::to('login')->with('errors','Wrong credentials!!');

});





//log out function
Route::get('/logout',function(){
	Auth::logout();
	return Redirect::to('/');
});





//////////////////////////////////		Admin Panel Routes  	//////////////////////////////////////////

	
	// filter for all admin prefix
	Route::filter('admin',array(
		'before'=>'auth',
		function(){
			return Redirect::intended('admin/dashboard');
		}));
	Route::when('admin/*', 'auth');


	//returns add disease page
	Route::get('admin/adddisease',array('as'=>'adddisease',function(){
		return View::make('after_login.adddisease');
	}));

	

	//store disease to database using web service
	Route::post('admin/adddisease','DashboardController@addDisease');

	Route::get('admin/dashboard',function(){
		return View::make('after_login.dashboard');
	});


	
    //get list of contributed disease by logged in organization
	Route::get('admin/mycontribution',array('as'=>'contribution','uses'=>'DashboardController@myContribution'));

	
	//edit disease via webclient
	Route::post('admin/edit','DashboardController@editContribution');

	
	//update disease info
	Route::post('admin/update-disease-info','DashboardController@updateDiseaseInfo');


	// for organizational detail update form display
	Route::get('admin/update-organization',array('as'=>'update-organization','uses'=> 'OrganizationController@editOrganization'));

	// for actula update
	Route::post('admin/update-organization','OrganizationController@updateOrganization');


	//to delete disease
	Route::post('admin/delete','DashboardController@deleteContribution');



//////////////////////////////////////////// 	Admin Routing Ends 	////////////////////////////////////////////////



// 404 error handling
App::missing(function($exception)
{
	return " <p><h1>404 Error Page not found. </h1></p>";
});