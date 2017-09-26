@extends('layout')
@include('templates/nav')
@section('content')

<div class="intro-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h2>{{$events->title}} </h2>
                    </br>
                    <h4>{{$events->description}}</h4>

                </div>
            </div>
        </div>
    </div>
</div>

    <a href="/upEvents" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>



@include('templates/footer')
@stop
