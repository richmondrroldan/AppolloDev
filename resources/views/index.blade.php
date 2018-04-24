@extends('layout')
@extends('templates/nav')
@section('content')
  
<!-- Header -->
<section class="img-header" >

    <h1 class="head">WE <span class="head-span">BUILD</span> INNOVATORS MORE THAN THE INNOVATION</h1>
    <h2 class="subhead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit </h2>
    
 <!--    
    <div class="container" style="margin-top:40vh;">
        <a href="wReq" class="btn btn-default btn-lg"> <span class="network-name">Request Workshop</span></a>
    </div> -->
</section> 

<!-- End Header --> 
<!-- Programs -->
<section class="eventprog">
    <div class="programs intro-header">
        <span class="programs-header">PROGRAMS</span>
    </div>
    <div class="intro-header" style="margin-top: 30px; margin-bottom: 30px;">
            <h2 class="programhead"> We provide mentors with various expertise, <br> find the mentor that fits your needs. </h2>
            <a href="findMentors" class="gbuttons btn btn-default btn-lg"> <span class="network-name">Find Mentors</span></a>
            </br>
            </br>
            <h2 class="programhead"> We have events, workshops, that caters different needs <br> view our line up of events. </h2>
            <a href="upEvents" class="gbuttons btn btn-default btn-lg"> <span class="network-name">Upcoming Events</span></a>
            </br>
            </br>
            
            <h2 class="programhead"> We facilitate workshops by request, <br> you can request here.</h2>
            <a href="wReq" class="gbuttons btn btn-default btn-lg"> <span class="network-name">Request Workshop</span></a>
            </br>
    </div>
</section>

<!-- End Programs -->
<!-- News -->
<section>
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
 

@stop

  
