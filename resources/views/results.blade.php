@extends('layout')
@include('templates/nav')
@section('content')
	
	<div class="container">
		  <div class="row intro-message">
		  	@foreach($results as $result)
   				<div class="col-md-4">
   					<div class="thumbnail">
   						<div class="center">
			            <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle">
			            <h3 class="media-heading">{{$result->name}}</h3>
			            <span><strong>Skills: </strong></span>
			            <span class="label label-warning">{{$result->interests}}</span> 
		            <br>
		            </div>
		        	</div>
		    	</div>
			@endforeach
		</div>
    </div>
    
@include('templates/footer')
@stop

