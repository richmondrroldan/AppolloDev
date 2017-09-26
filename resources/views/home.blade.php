@extends('layout')        
@include('templates/nav')
        @if(Auth::user()->uType == 1)
            @section('acontent')
            @include('admin')
            @endsection
        @elseif(Auth::user()->uType == 0)
            @section('content')
            @include('profile.profile')
            @endsection
        @else
        	@section('content')
            @include('mLanding')
            @endsection
        @endif
@include('templates/footer')
