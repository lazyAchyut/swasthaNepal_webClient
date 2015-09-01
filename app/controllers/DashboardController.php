<?php

class DashboardController extends BaseController
{
	
		public function __construct()
	{
	    // $this->beforeFilter('csrf', array('on' => array('post')));
	}

	function addDisease()
	{
		$rules = array(
	        'd_name' => array('required'),
	        'd_description'  => array('required'),
	        'd_symptom' => array('required'),
	        'd_location' => array('required'),
	        'd_date' => array('required','date'),
	        'd_temperature' => array(''),
	        'd_treatment' => array('')
	    );

	    $validation = Validator::make(Input::all(), $rules);
	    if ($validation->fails())
	    {
	        return Redirect::to('admin/adddisease')->withInput()->withErrors($validation);
	    }
	    else
	    {	
	    	$data = array(
				"d_name"=>Input::get('d_name'),
				"d_symptom"=>Input::get('d_symptom'),
				"d_description"=>Input::get('d_description'),
				"d_treatment"=>Input::get('d_treatment'),
				"d_date"=>date('Y-m-d',strtotime($_POST['d_date'])),
				"d_location"=>Input::get('d_location'),
				"d_temperature" => Input::get('d_temperature'),
				"org_code"=>"123",
				"trust_flag"=>"0",
				"user_id"=>"12"
				);
	    	

	    	$datas = json_encode($data);

	       	include(public_path()."/httpful.phar");
	    	try{
			$url = "http://localhost:8080/SwasthaNepal/disease/saveDisease";
			$response = Httpful\Request::post($url)->sendsJson()->body($datas)->send();
				
		    }
		    catch(Exception $e){
		    	die("Server is down");
		    }

			if(strcmp('TRUE', $response)==0)
				return View::make('after_login.adddisease')->with('report','Successfully Infomation is Added');
	    	else
	    		return View::make('after_login.adddisease')->with('report','Error occurred while adding data')->withInput();
	    	    	    	
	    }

	}


	
	function myContribution()
	{
		// this need to be changed later.
		$org_code = '123';
		include(public_path()."/httpful.phar");

		try{
			$url = "http://localhost:8080/SwasthaNepal/user/orgContribution";
			$response = Httpful\Request::post($url)->body($org_code)->send();
			$data['response'] = json_decode($response,true);	

	    }
	    catch(Exception $e){
	    	die("Server is down");
	    }
		return View::make('after_login.myContribution',$data);
	}

	


	function editContribution()
	{
		$d_id = Input::get('d_id');
		include(public_path()."/httpful.phar");

		try{
			$url = "http://localhost:8080/SwasthaNepal/disease/getDisease";
			$response = Httpful\Request::post($url)->body($d_id)->send();
			$data['row'] = json_decode($response,true);	

	    }
	    catch(Exception $e){
	    	die("Server is down");
	    }
		
		return View::make('after_login.editContribution',$data);

	}


	function updateDiseaseInfo()
	{
		// $data = Input::except('_token');
		$data = array(
				"d_id"=>Input::get('d_id'),
				"d_name"=>Input::get('d_name'),
				"d_symptom"=>Input::get('d_symptom'),
				"d_description"=>Input::get('d_description'),
				"d_treatment"=>Input::get('d_treatment'),
				"d_date"=>date('Y-m-d',strtotime($_POST['d_date'])),
				"d_location"=>Input::get('d_location'),
				"d_temperature" => Input::get('d_temperature'),
				"org_code"=>"123",
				"trust_flag"=>"0",
				"user_id"=>"12"
				);

	    
		$datas = json_encode($data);

		include(public_path()."/httpful.phar");

		try{
			$url = "http://localhost:8080/SwasthaNepal/disease/saveDisease";
			$response = Httpful\Request::post($url)->sendsJson()->body($datas)->send();
		}
	    catch(Exception $e){
	    	die($e);
	    }

	    
	   if(strcmp('TRUE', $response)==0)
				return Redirect::to('admin/mycontribution');
	    	else
	    		return View::make('after_login.editContribution')->with('report','Error occurred while adding data')->withInput();
	}


	public function deleteContribution()
	{
		$id = Input::get('id');
		include(public_path()."/httpful.phar");

		try{
			$url = "http://localhost:8080/SwasthaNepal/disease/deleteDisease";
			$response = Httpful\Request::post($url)->body($id)->send();
	    	$data['response'] = json_decode($response,true);	
			
		}
	    catch(Exception $e){
	    }

	   	return Redirect::to('admin/mycontribution');
	    
	   	
	}


}