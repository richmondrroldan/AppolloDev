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
                    {!! Form::model($user, ['method' => 'PATCH','route' => ['profile.update', Auth::user()->id]]) !!}
                        <div class="form-group">
                    <div class="cols-sm-10">
                           <div class="form-group">
                                <strong>Interests:</strong>
                                    {!! Form::textarea('interests', null, array('placeholder' => 'Interests','class' => 'form-control')) !!}
                                </div>
                        </div>
                        </div>
              
                            
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
</div
@include('templates/footer')
@stop