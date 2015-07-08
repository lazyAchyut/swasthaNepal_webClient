@extends('layouts.bMain')


@section('title')
	{{$response['d_name']}} | Disease
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
		
		@if($response)
			
				<div class="alert alert-info"><BIG><strong>{{{$response['d_name']}}}</strong></BIG> </div>

			<div class="row">
				<div class="col-sm-6 col-xs-12">	
					<div class="outside"><div class="label">Date Posted: </div> {{ $response['d_date'] }}  </div>
					<div class="outside"><div class="label">Temperature: </div> {{ $response['d_temperature'] }}  </div>
					<div class="outside"><div class="label">Location: </div> {{ $response['d_location'] }}  </div>
				</div>

				<div class="col-xs-6 col-xs-12">
					
				@if($response['org_code'])
					<div class="outside"><div class="label">Organization: </div> <a href="/organization/{{$response['org_code']}}" style="color:blue; text-decoration:none;">{{ $response['org_code'] }} </a> </div>
				@else
					<div class="label">Submitted By User </div>
				@endif
					
				</div>
				
			</div> 
			<!-- end of row -->
			<div id="tabs" class="tab-custom">
			  <ul>
			    <li><a href="#deccription">Description</a></li>
			    <li><a href="#symptoms">Symptoms</a></li>
			    <li><a href="#treatments">Treatments</a></li>
			  </ul>
			  <div id="deccription">
			   {{$response['d_description']}}
			  </div>
			  <div id="symptoms">
			    {{$response['d_symptom']}}
			  </div>
			  <div id="treatments">
			    {{$response['d_treatment']}} 
			   </div>
			</div>
				
			
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
