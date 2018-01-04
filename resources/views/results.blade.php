@extends('layout')
@include('templates/nav')
@section('content')


<div class="container container-btm">
	<div class="row intro-message">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">

				{!! Form::model($results, ['method' => 'GET','route' => ['results.index']]) !!}

				{!! Form::text('search', null, array('placeholder' => 'Search','class' => 'form-control')) !!}


				<button type="submit" class="btn btn-default btn-lg span"><span class="network-name">SEARCH</span></button>


				{!! Form::close()!!}
				</br>
				@foreach($results as $result)
				<div class="col-md-4">
					<div class="thumbnail">
						<div class="center">
						<a href="{{route('profile.show', $result->id)}}"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle" ahref=""></a>
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
	</div>
</div>

@include('templates/footer')
@stop
