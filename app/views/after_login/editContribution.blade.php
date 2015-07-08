@extends('layouts.adminlayout')

@section('title')
Edit Disease Info | Swastha Nepal
@stop

@section('head')
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Vollkorn"> 
	<link rel="stylesheet" type="text/css" href="{{asset('_datepicker/jquery-ui.css')}}"> 
	<link rel="stylesheet" type="text/css" href="{{asset('_datepicker/jquery-ui.structure.min.css')}}"> 
@stop

@section('header')
Edit Disease Information
@stop

@section('body')

{{{ isset($report) ? $report : '' }}}





	{{Form::open(array('url'=>'admin/update-disease-info','class'=>'form-group'))}}
		{{Form::text('d_id',$row['d_id'], array('hidden'=>'hidden'))}}
		{{Form::label('d_name','Disease Name*')}}
		{{Form::text('d_name', $row['d_name'] ,array('class'=>'form-control'))}}
			<div id="error-msg"> {{ $errors->first('d_name') }} </div>
	<br/>
		{{Form::label('d_description', 'Description*')}}
		{{Form::textarea('d_description',$row['d_description'] ,array('required'=>'required','class'=>'form-control'))}}
		<div id="error-msg"> {{ $errors->first('d_description') }} </div>
	<br/>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 "> 
				{{Form::label('d_symptom','Symptoms*')}}
				{{Form::textarea('d_symptom',$row['d_symptom'] ,array('required'=>'required','class'=>'form-control ckeditor '))}}
				<div id="error-msg"> {{ $errors->first('d_symptom') }} </div>
			</div>

			<div class="col-md-6 col-sm-6 col-xs-12">
				{{Form::label('d_treatment', 'Treatment')}}
				{{Form::textarea('d_treatment',$row['d_treatment'] ,array('class'=>'form-control ckeditor'))}}
			</div>
		</div>
		<br/>
			{{Form::label('d_location','Location*')}}
			{{Form::text('d_location',$row['d_location'] ,array('required'=>'required','class'=>'form-control'))}}
			<div id="error-msg"> {{ $errors->first('d_location') }} </div>
		<br>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 "> 
				{{Form::label('d_temperature','Temperature')}}
				{{Form::text('d_temperature',$row['d_temperature'] ,array('class'=>'form-control'))}}
				<div id="error-msg"> {{ $errors->first('d_temperature') }} </div>
			</div>
		
			<div class="col-md-6 col-sm-6 col-xs-12">
				{{Form::label('d_date','Date Published*')}}
				{{Form::text('d_date',$row['d_date'] ,array('required'=>'required','class'=>'form-control','id'=>'datepicker'))}}
				<div id="error-msg"> {{ $errors->first('d_date') }} </div>
			</div>
		</div>
		<br/>
		{{Form::submit('Update',array('class'=>'btn btn-success btn-lg'))}}
	{{ Form::token() . Form::close() }}	




	@section('script')
		<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
		<script type="text/javascript" src="{{asset('_js/jquery-ui.js')}}"></script>
		<script type="text/javascript">
		$(function(){
		 	 $('#mycontribution').addClass('active').siblings().removeClass('active');
		 });

		$(function() {
		    $( "#datepicker" ).datepicker();
		  });
		</script>
	@stop	
@stop