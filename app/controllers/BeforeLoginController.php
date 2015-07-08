<?php

class BeforeLoginController extends BaseController
{

	public function searchDiseaseByName()
	{
		$disease_name = Input::get('disease_name');
		$data['disease_name']=$disease_name;
		include(public_path()."/httpful.phar");

		try{
			$url = "http://localhost:8080/SwasthaNepal/disease/getDiseaseByName/".$disease_name;
			$response = Httpful\Request::get($url)->send();
			$data['response'] = json_decode($response,true);	

	    }
	    catch(Exception $e){
	    	die("Server is down");
	    }
		return View::make('before_login.searchResult',$data);

	}

	public function getDisease($id)
	{
		include(public_path()."/httpful.phar");

		try{
			$url = "http://localhost:8080/SwasthaNepal/disease/getDisease/";
			$response = Httpful\Request::post($url)->body($id)->send();
			$data['response'] = json_decode($response,true);	

	    }
	    catch(Exception $e){
	    	die("Server is down");
	    }
		return View::make('before_login.detailDisease',$data);

	}

	
}