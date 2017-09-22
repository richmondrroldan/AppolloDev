@extends('layout')
@include('templates/nav')
@section('content')
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1 class="network-name">APPOLLO</span> </h1>
                        <h3>Lorem Ipsum</h3>
                        <hr class="intro-divider">
                        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.</h4>
                        <hr class="intro-divider">
                         <a href="training" class="btn btn-default btn-lg span"> <span class="network-name">Train With Us!</span></a>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>

    @foreach($articles as $article)
    <div class="well center">
        <div class="media span">
        <div class="container"><a href="/{{$article->id}}"><img class="img" src="images/{{$article->name}}"></a></div>
        
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
    </div>
    @endforeach

    
@include('templates/footer')
@stop
