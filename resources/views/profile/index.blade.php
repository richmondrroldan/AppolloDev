@extends('layout')
@include('templates/nav')
@section('content')
    <div class="container intro-message">
        <center>
            <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle">
            <h3 class="media-heading">User<small>USA</small></h3>
            <span><strong>Skills: </strong></span>
            <span class="label label-warning">HTML5/CSS</span>
            <span class="label label-info">Adobe CS 5.5</span>
            <span class="label label-info">Microsoft Office</span>
            <span class="label label-success">Windows XP, Vista, 7</span>
            </center>
            <hr>
            <center>
            <p class="text-left"><strong>Bio: </strong><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
            <br>
            <a href="{{route('profile.edit', Auth::user()->id)}}">Edit</a>
        </center>
    </div>
@include('templates/footer')
@stop
