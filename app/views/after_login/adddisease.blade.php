@extends('layouts.adminlayout')

@section('title')
Add Disease Info | Swastha Nepal
@stop

@section('head')
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Vollkorn"> 
	<link rel="stylesheet" type="text/css" href="{{asset('_datepicker/jquery-ui.css')}}"> 
	<link rel="stylesheet" type="text/css" href="{{asset('_datepicker/jquery-ui.structure.min.css')}}"> 
@stop

@section('header')
Add Disease Information
@stop

@section('body')


{{{ isset($report) ? $report : '' }}}



	{{Form::open(array('url'=>'admin/adddisease','class'=>'form-group'))}}
		{{Form::label('d_name','Disease Name*')}}
		{{Form::text('d_name','',array('class'=>'form-control'))}}
			<div id="error-msg"> {{ $errors->first('d_name') }} </div>
	<br/>
		{{Form::label('d_description', 'Description*')}}
		{{Form::textarea('d_description','',array('required'=>'required','class'=>'form-control ckeditor'))}}
		<div id="error-msg"> {{ $errors->first('d_description') }} </div>
	<br/>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 "> 
				{{Form::label('d_symptom','Symptoms*')}}
				{{Form::textarea('d_symptom','',array('required'=>'required','class'=>'form-control ckeditor '))}}
				<div id="error-msg"> {{ $errors->first('d_symptom') }} </div>
			</div>

			<div class="col-md-6 col-sm-6 col-xs-12">
				{{Form::label('d_treatment', 'Treatment')}}
				{{Form::textarea('d_treatment','',array('class'=>'form-control ckeditor'))}}
			</div>
		</div>
		<br/>
			{{Form::label('d_location','Location*')}}
			{{Form::text('d_location','',array('required'=>'required','class'=>'form-control'))}}
			<div id="error-msg"> {{ $errors->first('d_location') }} </div>
		<br>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 "> 
				{{Form::label('d_temperature','Temperature')}}
				{{Form::text('d_temperature','',array('class'=>'form-control'))}}
				<div id="error-msg"> {{ $errors->first('d_temperature') }} </div>
			</div>
		
			<div class="col-md-6 col-sm-6 col-xs-12">
				{{Form::label('d_date','Date Published*')}}
				{{Form::text('d_date','',array('required'=>'required','class'=>'form-control','id'=>'datepicker'))}}
				<div id="error-msg"> {{ $errors->first('d_date') }} </div>
			</div>
		</div>
		<br/>
		{{Form::submit('Add',array('class'=>'btn btn-success btn-lg'))}}
	{{ Form::token() . Form::close() }}	



	@section('script')
		<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
		<script type="text/javascript" src="{{asset('_js/jquery-ui.js')}}"></script>
		<script type="text/javascript">
		$(function(){
		 	 $('#adddisease').addClass('active').siblings().removeClass('active');
		 });

		$(function() {
		    $( "#datepicker" ).datepicker();
		  });
		</script>
	@stop	
@stop