@extends('layout')

@section('content')
  
<!-- Header -->
<<<<<<< HEAD
    <div class="img-header">

=======
    <section class="img-header" >
>>>>>>> designtry
        <h1>WE <span class="head-span">BUILD</span> INNOVATORS MORE THAN THE INNOVATION</h1>
        </br>
        </br>
        </br>
        </br>
<<<<<<< HEAD
       
    </div> 
   
=======
        <div class="intro-header">
            <a href="upEvents" class="btn btn-default btn-lg span"> <span class="network-name">Upcoming Events</span></a>
            </br>
            </br>
            <a href="findMentors" class="btn btn-default btn-lg span"> <span class="network-name">Find Mentors</span></a>
            </br>
            </br>
            <a href="wReq" class="btn btn-default btn-lg span"> <span class="network-name">Request Workshop</span></a>
            </br>
        </div>
    </section> 
>>>>>>> designtry
<!-- End Header --> 
<!-- Programs -->
<div class="programs">
    <div class="intro-header"> 
        <span class="programs-header">- PROGRAMS -</span>
    </div>
</div>
 <div class="intro-header">
    <a href="upEvents" class="btn btn-default btn-lg span"> <span class="network-name">Upcoming Events</span></a>
    </br>
    </br>
    <a href="findMentors" class="btn btn-default btn-lg span"> <span class="network-name">Find Mentors</span></a>
    </br>
    </br>
    <a href="wReq" class="btn btn-default btn-lg span"> <span class="network-name">Request Workshop</span></a>
    </br>
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

  
