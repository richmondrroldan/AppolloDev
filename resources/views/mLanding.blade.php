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
                    @foreach($mentors as $mentors)
                    {!! Form::model($mentors, ['method' => 'POST','route' => ['mentors.update', $mentors->id]]) !!}
                        @foreach($skills as $skill)
                        {{Form::checkbox('$skill','$skill')}}
                        {{$skill->title}}
                        @endforeach
                        <button type="submit" class="btn btn-default btn-lg span"><span class="network-name">Submit</span></button>
                    {!! Form::close() !!}
                    @endforeach      
                     <a href="{{route('profile.edit', Auth::user()->id)}}" class="btn btn-default btn-lg"> <span class="network-name">Edit Profile</span></a>
                </div>
            </div>
        </div>
    </div>
</div

@stop