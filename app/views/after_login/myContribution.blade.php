@extends('layouts.adminlayout')

@section('title')
My Contribution | Swastha Nepal
@stop

@section('head')
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Vollkorn"> 
	<link rel="stylesheet" type="text/css" href="{{asset('_datepicker/jquery-ui.css')}}"> 
	<link rel="stylesheet" type="text/css" href="{{asset('_datepicker/jquery-ui.structure.min.css')}}"> 
@stop

@section('header')
My Contribution
@stop

@section('body')

{{{ isset($report) ? $report : '' }}}

<div class="table-responsive" style="background:#eee;border:2px solid #fff; margin-bottom:10px;">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Disease Name</th>
				<th>Location</th>
				<th>Post Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($response as $row)
				<tr>
					<td>{{$row['d_name']}}</td>
					<td>{{$row['d_location']}}</td>
					<td>{{$row['d_date']}}</td>
					<td>
						<form method="post" action="edit" style="display:inline;"><input type="text" value="{{$row['d_id']}}" name="d_id" hidden>
							<button class="btn btn-primary" id="submit" >Edit</button>
						</form>
						<form method="post" action="delete" style="display:inline;"><input type="text" value="{{$row['d_id']}}" hidden name="id">
							<button class="btn btn-danger" id="submit" onclick="return confirm('Are you sure to delete?');">Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>



	</table>
</div>
	
	@section('script')
		<script type="text/javascript">
		 $(function(){
		 	 $('#mycontribution').addClass('active').siblings().removeClass('active');
		 });		
		</script>
	@stop	
@stop