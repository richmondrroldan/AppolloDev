@extends('layout')
@include('templates/nav')
@section('content')

<div class="intro-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h3>{{Auth::user()->name}}</h3>
                    <p>{{Auth::user()->email}}</p> 
                    {!! Form::model(Auth::user(), ['method' => 'PATCH','route' => ['profile.update', Auth::user()->id]]) !!}

                        <div class="form-group">
                            <strong>Tell us about yourself:</strong>
                                <textarea class="form-control" name="about" placeholder="I am..."></textarea>
                        </div>
                        @if(Auth::user()->uType == 2)
                        <div class="form-group">
                                <strong>Pick your expertise:</strong>
                            </br>
                                @foreach($skills as $skill)     
                                    
                                    {{ Form::checkbox('interests[]', $skill->title, (strpos(Auth::user()->interests, $skill->title) !== FALSE) ? true : false ) }}
                                    {{ Form::label($skill->title) }}
                                    </br>
                                @endforeach
                        @endif
                                
                        <button type="submit" class="btn btn-default btn-lg span"><span class="network-name">Submit</span></button>
                        </br>
                        </br>
                        <a href="/profile" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
                        </div>


                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>


@stop