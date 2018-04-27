@extends('layout')
@extends('templates/nav')
@section('content')
  
<!-- Header -->
<section class="img-header" >

    <h1 class="head">WE <span class="head-span">BUILD</span> INNOVATORS MORE THAN THE INNOVATION</h1>
    <h2 class="subhead"> Guided by the United Nations Sustainable Development Goals. </h2>
    
 <!--    
    <div class="container" style="margin-top:40vh;">
        <a href="wReq" class="btn btn-default btn-lg"> <span class="network-name">Request Workshop</span></a>
    </div> -->
</section> 

<!-- End Header --> 
<!-- Programs -->
    <div class="programs intro-header" id="appollo">
        <span class="programs-header">THE APPOLLO</span>
    </div>
    <div class="intro-header" style="margin-top: 30px; margin-bottom: 30px;">
            <h2 class="programhead">We provide mentors with various expertise, <br> find the mentor that fits your needs.</h2>
            <a href="findMentors" class="gbuttons btn btn-default btn-lg"> <span class="network-name">Find Mentors</span></a>
            </br>
            </br>
            <h2 class="programhead"> We have events, workshops, that caters different needs <br> view our line up of events. </h2>
            <a href="upEvents" class="gbuttons btn btn-default btn-lg"> <span class="network-name">Upcoming Events</span></a>
            </br>
            </br>

            <h2 class="programhead">View our past events. Articles by the people involved.</h2>
            <a href="upEvents" class="gbuttons btn btn-default btn-lg"> <span class="network-name">News Feed</span></a>
            </br>
            </br>
            
            <h2 class="programhead"> We facilitate workshops by request, <br> you can request here.</h2>
            @if(Auth::guest())
            <div class="popup" onclick="myFunction()"><a class="gbuttons btn btn-default btn-lg"> <span class="network-name">Request Workshop</span></a>
              <span class="popuptext" id="myPopup">Please Register <a href="{{ url('/register') }}">Here</a></span>
            </div>
            @else
            <a href="wReq" class="gbuttons btn btn-default btn-lg"> <span class="network-name">Request Workshop</span></a>
            </br>
            @endif
    </div>

<!-- End Programs -->
 <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="subhead"><a href="/"> Appollo </a></h2>
                </div>
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="/">Home</a></li>
                        @if(Auth::guest())
                        <li><a href="/home">Log in or Sign up</a></li>
                        @endif
                        <li><a href="#appollo">The Appollo</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="http://hifi.benilde.edu.ph">Company Information</a></li>
                        <li><a href="https://www.facebook.com/benildeHIFI">Contact us</a></li>
                        
                    </ul>
                </div>
                
                <div class="col-sm-3">
                    <h5 class="contactdetails">Contact Details</h5>
                    <ul>
                        <li>Rm 404c</li>
                        <li>De La Salle-College of Saint Benilde</li>
                        <li>School of Design and Arts</li>
                        <li>950 Ocampo St, Malate, Manila, 1004</li>
                        <li>Philippines</li>
                        <p>+632 230 5100 loc 3852</p>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

@stop

  
