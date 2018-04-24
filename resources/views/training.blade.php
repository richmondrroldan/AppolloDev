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
                    <h3>Welcome to HIFI's training programs.</h3>
                    <hr class="intro-divider">
                    <ul class="list-inline intro-social-buttons">
                        <li>
                            <a href="upEvents" class="btn btn-default btn-lg span"> <span class="network-name">Upcoming Events</span></a>
                        </li>
                        <li>
                            <a href="findMentors" class="btn btn-default btn-lg span"> <span class="network-name">Find Mentors</span></a>
                        </li>
                        <li>
                            <a href="wReq" class="btn btn-default btn-lg span"> <span class="network-name">Request Workshop</span></a>
                        </li>
                        </br>
                        </br>
                        </br>
                        <li>
                        <a href="/" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

