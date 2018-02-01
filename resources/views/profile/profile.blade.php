@extends('layout')
@include('templates/nav')
@section('content')

<div class="intro-header" style="padding-top: 80px;">
    <div class="container">

        <div class="intro-message  thumbnail row">
            <div class="col-sm-3">
                <img src="/images/avatar/{{Auth::user()->profilepic}}" style="width: 300px; height: 300px;" class="img-circle">
                 <form enctype='multipart/form-data' action='/profile' method='POST'>
                <label> Update Profile Pic </label>
                <input type="file" name="profilepic">
                {{csrf_field()}}
                <input type="submit" name="">
            </form>
            </div>

            <div class="col-sm-9">
                <h3>{{Auth::user()->name}}</h3>
                <p>{{Auth::user()->email}}</p>
                <p>{{Auth::user()->interests}}</p>
            </div>
            <a href="{{route('profile.edit', Auth::user()->id)}}" class="btn btn-default btn-lg"> <span class="network-name">Edit Profile</span></a>
        </br>
        </br>
            @if(Auth::user()->uType == 2)
            <a href="{{route('mApp.show', Auth::user()->id)}}" class="btn btn-default btn-lg"> <span class="network-name">View Mentorship Requests</span></a>
            @elseif(Auth::user()->uType == 0)
            <a href="{{route('rWorkshop.show', Auth::user()->id)}}" class="btn btn-default btn-lg"> <span class="network-name">View My Requests</span></a>
            @endif
        </div>

    </div>
  </div>
</div

@include('templates/footer')
@stop
