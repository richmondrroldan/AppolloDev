@extends('layout')
@include('templates/nav')
@section('content')
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> login
	
	<div class="container container-btm">
		<div class="row intro-message">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">

					{!! Form::model($skills, ['method' => 'GET','route' => ['results.index']]) !!}

					{!! Form::text('search', null, array('placeholder' => 'Search','class' => 'form-control')) !!}

					<strong>Expertise:</strong>
					<select name="skills_title" id="skills_title" class="form-control">
					<option value="">--- Select Expertise ---</option>
					@foreach ($skills as $skill)
					<option value="{{ $skill->title }}">{{ $skill->title }}</option>
					@endforeach
					</select>

					<button type="submit" class="btn btn-default btn-lg span"><span class="network-name">SEARCH</span></button>


					{!! Form::close()!!}
				</div>
			</div>
		</div>
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

<<<<<<< HEAD
=======
=======

<div class="intro-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h3>RESULTS</h3>
                    <hr class="intro-divider">
                    <ul class="list-inline intro-social-buttons">
                        <li>
                            @foreach($results as $result)
                                <a href="/mDet/{{$result->id}}" > <span class="network-name">{{$result->name}}</span></a><br><br>
                            @endforeach
                        </li>
                        </br>
                        </br>
                        </br>
                        <li>
                        <a href="/findMentors" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div
@include('templates/footer')
@stop
>>>>>>> 1c73d7bc9c562d05d74ed7caf991ed22bb82721e
>>>>>>> login
