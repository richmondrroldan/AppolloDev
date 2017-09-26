@extends('layout')
@include('templates/nav')
@section('content')
<div class="intro-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                    <div class="intro-message">
                    <h3>Welcome to HIFI's training programs.</h3>
                    <hr class="intro-divider">
                    <ul class="list-inline intro-social-buttons">
                        @foreach($events as $event)
                        <li>
                            <a type="button" class="btn btn-default btn-lg span" id="dtBtn" href="{{route('events.show', $event->id)}}"><span class="network-name">{{$event->title}}</span></a>
                        </li>

                        @endforeach
                        </br>
                        </br>
                        </br>
                        <li>
                            <a href="training" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('templates/footer')
@stop