@extends('layout')
@include('templates/nav')
@section('content')
<div class="intro-header">
    <div class="container">
        <div class="col-lg-12">
            <div class="intro-message">
                <h1 class="network-name">APPOLLO</span> </h1>
                <h3>Lorem Ipsum</h3>
                <hr class="intro-divider">
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.</h4>
                <hr class="intro-divider">
                <h3>Welcome to HIFI's training programs.</h3>
                <hr class="intro-divider">
                <ul class="list-inline intro-social-buttons">
                <li>
                <a href="upEvents" class="btn btn-default btn-lg span"> <span class="network-name">Upcoming Events</span></a>
                </li>
                <li>
                <a href="findMentors" class="btn btn-default btn-lg span"> <span class="network-name">Find Mentors</span></a>
                </li>
                <li>
                <a href="wReq" class="btn btn-default btn-lg span"> <span class="network-name">Request Workshop</span></a>
                </li>  
            <h3 class="center">Recent Events</h3>

            @foreach($articles as $article)
                <div class="well">
                    <a href="/{{$article->id}}"><img src="images/{{$article->name}}" style="width: 200px; height: 200px;" class="img-circle"></a>

                        <div class="media-body">
                        <h4 class="media-heading">{{$article->title}}</h4>
                        <p class="center">{{$article->description}} </p>
                        </div>
                    <ul class="list-inline list-unstyled">
                    <li><span><i class="glyphicon glyphicon-share"></i> Share</span></li>
                    <li>|</li>
                    <li><span><i class="glyphicon glyphicon-comment"></i> Comment </span></li>
                    </ul>
               
                    </div>
            @endforeach 
            </div>
            </div>

        </div>

    </div>
    <!-- /.container -->

</div>


    
@include('templates/footer')
@stop
