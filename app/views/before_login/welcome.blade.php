@extends('layouts.bMain')

@section('title')
Swastha Nepal | For Development and Sustenance of Open Health Data
@stop

@section('head')
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Vollkorn"> 
@stop

@section('login_or_logout')
	<li id="login"><a style="background:#FC5353; color:#fff;cursor:pointer;" data-toggle="modal" data-target=".bs-example-modal-sm">Login</a></li>
@stop

@section('body')

		<header>
			<img src="{{asset('_images/main_logo.png')}}" class="img-responsive" id="main_logo">
			<div class="page-header">
				<h3 style="display:inline;">Welcome to</h3><h1 style="display:inline;"> Swastha Nepal</h1> 
				<p class="text-right"><small> -For the Development and sustenence of Open Health Data in Nepal</small></p>
			</div>
		</header>

		<div>
			<div class="text-justify" id="content">
				<span class="firstcharacter">O</span>pen health data provides an efficient way to understand and analyse the public health scenario and user can use for personal benefit. 
				The source of open health data includes various platforms on different computing devices and they require analysis accordingly.<br>
				
				To eliminate differences and standardize the way open data is accessed, the proposed system provides web services as an integrated interface for easier access of data to general public.

				<p><p>Common people get localized information about the disease and they can contribute to the system by sharing their medications (Allelopathy, Homeopathy), experiences to disease they have been diagnosed with or have knowledge about. <p>
				The user can contribute using app client and various interested health institutions or organizations can use web client. <p>
				The system is brought to life by people who believe in open data. Eventually this system can be used for data driven medication and treatment plans.

			</div>
			<hr style="border:1px dashed #ccc;">
		</div>


@stop