<?php

class OrganizationController extends BaseController
{
	
	public function __construct()
	{
	    $this->beforeFilter('csrf', array('on' => array('post')));
	}



	public function editOrganization()
	{
		
		$org_code = Session::get("org_code");
		include(public_path()."/httpful.phar");

		try{
			$url = "http://localhost:8080/SwasthaNepal/organization/getinformation/".$org_code;
			$response = Httpful\Request::get($url)->send();
			$data = json_decode($response,true);	

	    }
	    catch(Exception $e){
	    	die("Server is down");
	    } 

	    
		return View::make('after_login.organization_detail')->with('org',$data);
	}


	public function updateOrganization()
	{
				
		$data = array(
			'org_code' => Session::get("org_code"),
			'org_name' => Input::get('org_name'),
			'org_address' => Input::get('org_address'),
			'org_description' => Input::get('org_description'),
			'org_contact' => Input::get('org_contact')
			);

		$datas = json_encode($data);

		include(public_path()."/httpful.phar");
    	try{
		$url = "http://localhost:8080/SwasthaNepal/organization/updateOrganization";
		$response = Httpful\Request::post($url)->sendsJson()->body($datas)->send();
			
	    }
	    catch(Exception $e){
	    	die("Server is down");
	    }

	    if(strcmp('TRUE', $response)==0)
				Session::flash('success', 'Successfully Updated');
		else
				Session::flash('success', 'Error occurred while updating');

		return Redirect::to('admin/update-organization');
	}




	public function getOrganization($org_code)
	{
		include(public_path()."/httpful.phar");

		try{
			$url = "http://localhost:8080/SwasthaNepal/organization/getinformation/".$org_code;
			$response = Httpful\Request::get($url)->send();
			$data = json_decode($response,true);	

	    }
	    catch(Exception $e){
	    	die("Server is down");
	    } 

	    
		return View::make('before_login.organization_profile')->with('org',$data);
	}



}