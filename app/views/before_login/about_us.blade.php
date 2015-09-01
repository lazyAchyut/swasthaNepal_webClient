@extends('layouts.bMain')

@section('title')
About Us | Swastha Nepal
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
				<span class="firstcharacter">I</span>nformation and communic alioli technologies (ICT) offer innovative fonnats for promoting
					healthy lifestyles and reinforcing public health initiatives. They can be applied to large
					population segments without losing the functionality of being tailored to individual fluctuating
					needs.
					<p> <br/>‘Swastha Nepal: Development and Sustenance of Open Health Data Driven
					System in Nepal” is a project that implements the concept of open health data. Open data and
					big data are two most trending field of studies in ICT (Infonnation and Communication
					Technology). Open data is data that can be freely used. re-used and redistributed by anyone -
					subject only. at most. to the requirement to attribute and share alike. With open health data
					we can share different medication and treatment methodology. For instance, like Homeopathy
					(Ayurvedic) medication are commonly used in rural part of country and most of them are
					effective, we can share those treatment plans along with Allopathy treatments. We can weigh
					the pros and cons of both treatments.
			</div>
			<hr style="border:1px dashed #ccc;">
		</div>


@stop