@extends('layouts.bmain')

@section('title')
	Login | Swastha Nepal
@stop

@section('body')
	<div class="container">
		<div id="login_holder">  
			<div>  
			<h4 style="color:#feeeef;">Please Login To Access!!</h4><hr>
			@if(Session::has('errors'))
				<p style="color:#f00; font-weight:bolder;">{{Session::get('errors')}}</p>
			@endif

			    {{Form::open(array('url'=>'/login','method'=>'POST','class'=>'form-group'))}}
		      		{{Form::label('access_token','Access Token')}} <p>
		      		{{Form::password('password',array('placeholder'=>'Secret Token','autofocus'=>'true','class'=>'form-control'))}}<p>
		      		{{Form::submit('Login',array('class'=>'form-control btn btn-success'))}}
		      		<a href="#" style="text-decoration:none; color:#0f00ff">Forget Password</a>
		      	{{Form::close()}}
		    </div>
	    </div>

	    </div>

	    @section('script')
	   <script type="text/javascript">
	  		 // $(document).ready(function(){
	    	// 	  $('#login').addClass("active");
			
	    	// });
		</script>
	    @stop
@stop