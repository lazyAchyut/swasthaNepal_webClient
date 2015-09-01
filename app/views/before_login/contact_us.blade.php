@extends('layouts.bMain')

@section('title')
Contact Us | Swastha Nepal
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
				<h1 style="display:inline;">About Us</h1>	
			</div>
		</header>

		<div>
			<div class="text-justify" id="content">
				<h2> SWASTHA NEPAL </h2>
				<p class="lead"> Anamnagar, Kathmandu</p>
				<p class="lead"> Phone Number: 01-4453121</p>
			<hr style="border:1px dashed #ccc;">
		</div>


@stop