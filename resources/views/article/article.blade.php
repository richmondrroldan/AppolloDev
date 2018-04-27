@extends('layout')
@include('templates/nav')
@section('content')
@foreach($articles as $article)
<div style="padding-top: 80px;">
    <div class="well center">
        <div class="media span">
        <div class="container"><img class="img" src="images/articles/{{$article->name}}"></div>
        
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

<!-- News -->
<section class="newsfeed">
    <div class="programs intro-header">
        <span class="programs-header">RECENT EVENTS</span>
    </div>
    <div class="intro-header" style="margin-top: 30px; margin-bottom: 30px;">
           
            @foreach($articles as $article)
                <div class="well">
                        <a href="{{$article->link}}" target="_blank"><img src="images/articles/{{$article->name}}" style="width: 200px; height: 200px; padding-top: 10px;" class="img-circle"></a>
                        <h4 class="media-heading">{{$article->title}}</h4>
                        <p class="center">{{$article->description}} </p>
                   </div>
                </br>

                  
            @endforeach 

    </div>
</section>
<!-- End News -->


@endforeach	


@stop
