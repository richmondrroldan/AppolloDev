@extends('layout')
@include('templates/nav')
@section('content')
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1 class="network-name">{{$mentors->name}}</span> </h1>
                        <h3>{{$mentors->skills_title}}</h3>
                        <hr class="intro-divider">
                        <h4>{{$mentors->shortBio}}</h4>
                        <hr class="intro-divider">
                        </br>
                        </br>
                        </br>
                        <a href="/mSpec/{{$mentors->skills_title}}" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>


@include('templates/footer')
@stop
