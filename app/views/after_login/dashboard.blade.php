@extends('layouts.adminlayout')

@section('title')
Admin Dashboard | Swastha Nepal
@stop

@section('head')
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Vollkorn"> 
	<link rel="stylesheet" type="text/css" href="{{asset('_datepicker/jquery-ui.css')}}"> 
	<link rel="stylesheet" type="text/css" href="{{asset('_datepicker/jquery-ui.structure.min.css')}}"> 
@stop

@section('header')
Swastha Nepal Dashboard 
@stop

@section('body')
<div style="text-align:center;">
	<p> <img src="{{asset('_images/openhealth.jpg')}}" alt="" style="border-radius:12px;"> </p>

</div>
	






	@section('script')
		<script type="text/javascript">
		 $(function(){
		 	 $('#dashboard').addClass('active').siblings().removeClass('active');
		 });		
		</script>
	@stop	
@stop