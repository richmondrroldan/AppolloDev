@extends('layout')
@extends('templates/nav')
@section('content')
  
<!-- Header -->
    <section class="img-header" >

        <h1>WE <span class="head-span">BUILD</span> INNOVATORS MORE THAN THE INNOVATION</h1>
        
        <div class="container" style="margin-top:40vh;">
            <a href="wReq" class="btn btn-default btn-lg"> <span class="network-name">Request Workshop</span></a>
        </div>
    </section> 

<!-- End Header --> 
<!-- Programs -->
<div>
    <div class="programs intro-header">
        <span class="programs-header">- PROGRAMS -</span>
    </div>
     <div class="intro-header" style="margin-top: 30px; margin-bottom: 30px;">
            <a href="upEvents" class="btn btn-default btn-lg"> <span class="network-name">Upcoming Events</span></a>
            </br>
            </br>
            <a href="findMentors" class="btn btn-default btn-lg"> <span class="network-name">Find Mentors</span></a>
            </br>
            </br>
            <a href="wReq" class="btn btn-default btn-lg"> <span class="network-name">Request Workshop</span></a>
            </br>
        </div>
</div>

<!-- End Programs -->
 <div class="programs">
    <div class="intro-header"> 
        <span class="events-header">- RECENT -</span>
    </div>
</div>
<div class="intro-header">
        <div class="col-lg-12">
            <div class="intro-message">
           
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
 

</div>

@stop

  
