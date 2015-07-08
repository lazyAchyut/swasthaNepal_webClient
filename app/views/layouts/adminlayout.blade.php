<html>
	<head>
		<title>@yield('title')</title>

			<link rel="stylesheet" type="text/css" href="{{asset('_css/bootstrap.css')}}">
			<link rel="stylesheet" type="text/css" href="{{asset('_css/admin_style.css')}}">
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
						<li id="logout"><a href="{{URL::to('/logout')}}" style="background:#FC5353; color:#fff;cursor:pointer;">Log Out</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container" style="margin-top:10px;">

		<!-- <div class="well row" style="margin-top:60px; background:rgba(255,255,255,0.2)">
			<div class="col-lg-4 col-xs-12">
				<div class="btn-group-vertical" role="group">
	  				<a href="{{URL::Route('home')}}" class="dash_link"><button type="button" class="btn btn-info" id="dashboard">Dashboard</button></a>
	  				<a href="{{URL::Route('contribution')}}" class="dash_link"><button type="button" class="btn btn-info" id="mycontribution">My Contribution</button></a>
	  				<a href="{{URL::Route('adddisease')}}" class="dash_link"><button type="button" class="btn btn-info" id="adddisease">Add Disease</button></a>
	  				<a href="{{URL::Route('update-organization')}}" class="dash_link"><button type="button" class="btn btn-info" id="account">Account Setting</button></a>
				</div>
			</div>

			<div class="col-lg-8 col-xs-12">
				<header><h1 style="color:#Fff; line-height:90px;">@yield('header')</h1></header>
			</div>
		</div> -->

		<ul class="nav nav-tabs" style="margin-top:50px; margin-bottom:30px; background:rgba(10,10,105,0.2)">
		  <li role="presentation" id="dashboard"><a href="{{URL::Route('home')}}" class="dash_link"><button type="button" class="btn btn-info" >Dashboard</button></a></li>
		  <li role="presentation" id="mycontribution"><a href="{{URL::Route('contribution')}}" class="dash_link"><button type="button" class="btn btn-info" >My Contribution</button></a></li>
		  <li role="presentation" id="adddisease"><a href="{{URL::Route('adddisease')}}" class="dash_link"><button type="button" class="btn btn-info" >Add Disease</button></a></li>
		  <li role="presentation" id="account"><a href="{{URL::Route('update-organization')}}" class="dash_link"><button type="button" class="btn btn-info" >Account Setting</button></a></li>
		  <div class="col-lg-8 col-xs-12">
				<header><span style="color:#Fff;"><strong>@yield('header')</strong></span></header>
			</div>
		</ul>
			

		@yield('body')

		</div>
		<script type="text/javascript" src="{{asset('_js/jquery.js')}}"></script>
		<script type="text/javascript" src="{{asset('_js/bootstrap.js')}}"></script>
		 
		@section('script')

		@show
	</body>
</html>