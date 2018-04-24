@extends('layout')
@include('templates/nav')
@section('content')

<div class="intro-header" style="padding-top: 80px;">
    <div class="container">

        <div class="intro-message  thumbnail row">
            <div class="col-sm-3">
                asdf
            </div>

            <div class="col-sm-9">
                <h3>{{Auth::user()->name}}</h3>
                <p>{{Auth::user()->email}}</p>
                <p>{{Auth::user()->interests}}</p>
            </div>
            <a href="{{route('profile.edit', Auth::user()->id)}}" class="btn btn-default btn-lg"> <span class="network-name">Edit Profile</span></a>
        </div>

    </div>
  </div>
</div


@stop
