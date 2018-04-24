@extends('layout')        
@include('templates/nav')
        @if(Auth::user()->uType == 1)
            @section('acontent')
            @include('admin')
            @endsection
        @elseif(Auth::user()->uType == 2)
            @section('content')
            @include('profile.profile')
            @endsection
        @else
        	@section('content')
            @include('profile.profile')
            @endsection
        @endif

