@extends('layout')        
@include('templates/nav')
        @if(Auth::user()->uType == 1)
            @section('acontent')
            @include('admin')
            @endsection
        @else
            @section('content')
            @include('profile.profile')
            @endsection
        @endif  
@include('templates/footer')
