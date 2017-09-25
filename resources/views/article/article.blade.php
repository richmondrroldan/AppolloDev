@extends('layout')
@include('templates/nav')
@section('content')
@foreach($articles as $article)
<div style="padding-top: 80px;">
    <div class="well center">
        <div class="media span">
        <div class="container"><img class="img" src="images/{{$article->name}}"></div>
        
            <div class="media-body">
                <h4 class="media-heading">{{$article->title}}</h4>
                <p class="center">{{$article->article}} </p>
            </div>
                <ul class="list-inline list-unstyled">
                    <li><span><i class="glyphicon glyphicon-share"></i> Share</span></li>
                    <li>|</li>
                    <li><span><i class="glyphicon glyphicon-comment"></i> Comment </span></li>
                </ul>
        </div>
    </div>
</div>
@endforeach	

@include('templates/footer')
@stop
