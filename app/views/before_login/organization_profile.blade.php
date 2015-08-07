@extends('layouts.bMain')


@section('title')
	{{$org['org_name']}} | Organization
@stop

@section('head')
	<link rel="stylesheet" type="text/css" href="{{asset('_css/jquery-ui.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('_css/jquery-ui.theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('_css/jquery-ui.theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('_css/jquery-ui.structure.css')}}">

	<style type="text/css">
		.tab-custom
		{
			margin:20px;
			
		}

	</style>
	
@stop




@section('body')
	<div class="container" >
		<div id="search_list"> 
		@if($org)
			
			<div class="alert alert-info"><BIG><strong>{{{$org['org_name']}}}</strong></BIG> </div>

			<h4> <u>About us:</u> </h4> <div style="font-size:1em; color:#fff;">{{$org['org_description']}}</div>
			<p><br/>
			
			<h4> <u>Address</u> </h4> <div style="font-size:1em; color:#fff;">{{$org['org_address']}}</div>
			<p><br/>	

			<h4> <u>Contact us:</u> </h4> <div style="font-size:1em; color:#fff;">{{$org['org_contact']}}</div>

		@else
			<h2>Sorry No Result Found!!</h2>
		@endif		

	

		</div>
			
	</div>
	@section('script')

	<script type="text/javascript" src="{{asset('_js/jquery-ui.js')}}"></script>
	<script type="text/javascript">
		  $(function() {
		    $( "#tabs" ).tabs();
		  });
		
	</script>



	@stop
@stop
