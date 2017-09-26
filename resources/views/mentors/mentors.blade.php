@extends('layout')
@include('templates/nav')
@section('content')

<div class="intro-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h3>What do you need?</h3>
                    <hr class="intro-divider">
                    <ul class="list-inline intro-social-buttons">
                        <li>
                        @foreach($mentors as $mentor)
                            <a href="/mDet/{{$mentor->id}}" class="btn btn-default btn-lg span"> <span class="network-name">{{$mentor->name}}</span></a><br><br>
                        @endforeach
                        </li>
                        </br>
                        </br>
                        </br>
                        <li>
                        <a href="/findMentors" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div
@include('templates/footer')
@stop