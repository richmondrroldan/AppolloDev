@extends('layout')
@include('templates/nav')
@section('content')

<div class="intro-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <h3>{{Auth::user()->name}}</h3>
                    <p>{{Auth::user()->email}}</p>
                    <p>{{Auth::user()->interests}}</p>
                     <a href="{{route('profile.edit', Auth::user()->id)}}" class="btn btn-default btn-lg"> <span class="network-name">Edit Profile</span></a>
                </div>
            </div>
        </div>
    </div>
</div
@include('templates/footer')
@stop