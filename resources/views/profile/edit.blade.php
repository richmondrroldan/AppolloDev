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
                    {!! Form::model(Auth::user(), ['method' => 'PATCH','route' => ['profile.update', Auth::user()->id], 'file' => 'multipart/form-data']) !!}
                    
                        <div class="form-group">
                            <strong>Tell us about yourself:</strong>
                                {!! Form::textarea('bio', null, array('placeholder' => 'I am ...','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <strong>Pick your expertise:</strong>
                        </br>
                            @foreach($skills as $skill)     
                                
                                {{ Form::checkbox('interests[]', $skill->title, (strpos(Auth::user()->interests, $skill->title) !== FALSE) ? true : false ) }}
                                {{ Form::label($skill->title) }}
                                </br>
                            @endforeach
                            
                         <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Profile Picture:</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="file" class="form-control" name="profilepic" id="profilepic"/>
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
</div>

@include('templates/footer')
@stop