@extends('layouts.bmain')

@section('title')
	Search Result
@stop

@section('head')
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Vollkorn">
@stop




@section('body')
	<div class="container" >
		<div id="search_list">
		<div class="alert alert-info">Results for <BIG><strong>{{{$disease_name}}}</strong></BIG> </div>
		@if($response)
			@foreach($response as $row)
				@if($row['trust_flag']!=1) <!--this is from user -->
					<div class="panel panel-danger">
				@else
					<div class="panel panel-info">
				@endif
				 	
				 	<div class="panel-heading">
				  		<h3 class="panel-title text-capitalize"><a href="disease/{{$row['d_id']}}">{{$row['d_name']}}</a><small> &emsp; -{{$row['d_location']}}  [{{$row['d_date']}}]</small></h3>
				  	</div>
				  	<div class="panel-body">
				   		{{substr($row['d_description'],0,300)}}..
				  	</div>
				</div>
			@endforeach
		@else
			<h2>Sorry No Result Found!!</h2>
		@endif
	

		</div>
	</div>
@stop