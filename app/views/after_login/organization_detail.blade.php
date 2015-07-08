@extends('layouts.adminlayout')

@section('title')
Organization Setting
@stop

@section('body')

@section('header')
Organizational Details
@stop

	{{Form::open(array('url'=>'admin/update-organization','class'=>'form-group'))}}

	
	<div class="row">
		<div class="col-lg-6 col-md-6 col-xs-12">
			{{Form::label('org_name','Name of Organization*')}}
			{{Form::text('org_name',isset($org['org_name'])?$org['org_name']:'',array('class'=>'form-control'))}}
			<div id="error-msg"> {{ $errors->first('oraganization_name') }} </div>
		</div>
		<div class="col-lg-6 col-md-6 col-xs-12">
			{{Form::label('org_address', 'Organization Location*')}}
			{{Form::text('org_address',isset($org['org_address'])?$org['org_address']:'',array('required'=>'required','class'=>'form-control'))}}
				<div id="error-msg"> {{ $errors->first('description') }} </div>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-xs-12">
			{{Form::label('org_description','Description*')}}
			{{Form::textarea('org_description',isset($org['org_description'])?$org['org_description']:'',array('required'=>'required','class'=>'form-control ckeditor'))}}
			<div id="error-msg"> {{ $errors->first('description') }} </div>	
		</div>
		<div class="col-lg-6 col-md-6 col-xs-12">
			{{Form::label('org_contact','Contact*')}}
			{{Form::textarea('org_contact',isset($org['org_contact'])?$org['org_contact']:'',array('required'=>'required','class'=>'form-control ckeditor'))}}
			<div id="error-msg"> {{ $errors->first('contact') }} </div>	
		</div>
	</div>			
	<br/>
	{{Form::submit('Save',array('class'=>'btn btn-success btn-lg'))}}
	{{ Form::close() }}	

@section('script')
		<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
		@section('script')
		<script type="text/javascript">
		 $(function(){
		 	 $('#account').addClass('active').siblings().removeClass('active');
		 });		
		</script>
	@stop	
@stop

@stop