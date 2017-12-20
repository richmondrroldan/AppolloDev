@extends('layout')
@include('templates/nav')
@section('content')
    <div class="intro-header">
        <div class="container">
            @foreach($mentors as $mentor)
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1 class="network-name"></span> </h1>
                        <h3>{{$mentor}}</h3>
                        <hr class="intro-divider">
                        <h4></h4>
                        <hr class="intro-divider">
                        </br>
                        </br>
                        </br>
                        <a href="" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- /.container -->

    </div>


@include('templates/footer')
@stop
