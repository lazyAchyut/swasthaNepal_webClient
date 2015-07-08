<html>
	<head>
		<title>@yield('title')</title>

			<link rel="stylesheet" type="text/css" href="{{asset('_css/bootstrap.css')}}">
			<link rel="stylesheet" type="text/css" href="{{asset('_css/style.css')}}">
			<link rel="stylesheet" type="text/css" href="{{asset('_css/search_box.css')}}">
			<link rel="shortcut icon" href="{{asset('_images/favicon.ico')}}" type="image/x-icon" />
		@section('head')

  		
  	
  		@show
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top" id="cus_navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					{{Form::open(array('url'=>'/searchresults','method'=>'post','id'=>'search'))}}
						{{Form::text('disease_name','',array('placeholder'=>'Search Disease'))}}
					{{Form::close()}}

				</div>
					

				<div class="collapse navbar-collapse navHeaderCollapse ">
					<ul class="nav navbar-nav navbar-right" id="menu">
						<li id="home"><a href="{{URL::route('home')}}" >Home</a></li>
						<li id="about_us"><a href="#" >About Us</a></li>
						<li id="contact_us"><a href="#">Contact Us</a></li>
					@section('login_or_logout')
						
					@show
					</ul>
				</div>
			</div>
		</div>

		<!-- login form -->
		
			<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-sm">
			    <div class="modal-content" id="login_form">
			    <div class="modal-header">
			  	 <h4 class="modal-title">Organizational Login</h4>
			  	 </div>
			  	  <div class="modal-body">
			      {{Form::open(array('url'=>'/login','method'=>'POST','class'=>'form-group'))}}
			      		
			      		{{Form::label('access_token','Access Token')}} <br/>
			      		{{Form::password('password',array('placeholder'=>'Secret Token','autofocus'=>'true','class'=>'form-control'))}}<p>
			      	</div>
			      		{{Form::submit('Login',array('class'=>'form-control btn btn-success'))}}
			      		<a href="#" style="text-decoration:none;">Forget Password</a>
			      {{Form::close()}}

			    </div>
			  </div>
			</div>
		<!-- login form ends -->

		@yield('body')


		<script type="text/javascript" src="{{asset('_js/jquery.js')}}"></script>
		<script type="text/javascript" src="{{asset('_js/bootstrap.js')}}"></script>
		 
		@section('script')

		@show
	</body>
</html>