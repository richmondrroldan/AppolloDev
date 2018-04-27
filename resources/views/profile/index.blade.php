@extends('layout')
@include('templates/nav')
@section('content')
<div class="intro-header" style="padding-top: 80px;">
    <div class="container">
        <div class="intro-message  thumbnail row">
            <div class="col-sm-3">
                <img src="/images/avatar/{{$user->profilepic}}" name="aboutme" width="200" height="200" border="0" class="img-circle" ahref="">
            </div>

            <div class="col-sm-9">
            <h3>{{$user->name}}</h3>
            <p>{{$user->email}}</p>
            <p>{{$user->interests}}</p>
            </div>


            @if(Auth::guest())
            <div class="popup" onclick="myFunction()"><a class="btn btn-default btn-lg"> <span class="network-name">Request Mentorship</span></a>
              <span class="popuptext" id="myPopup">Please Register <a href="{{ url('/register') }}">Here</a></span>
            </div>
            @else
            <a href="{{route('rMentor.show', $user->id)}}" class="btn btn-default btn-lg"> <span class="network-name">Request Mentorship</span></a>
            @endif
            <br/>
            <br/>
            <a href="/findMentors" class="btn btn-default btn-lg" style="width: 230px;"> <span class="network-name">Back</span></a>
        </div>
    </div>
</div>


@stop
