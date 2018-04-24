@extends('layout')
@include('templates/nav')
@section('content')

<section class="container" style="padding-top: 50px;">
    <div class="center"> 
    <h3>What do you need?</h3>
    <div class="form-group" style="padding-bottom: 50px;">
                {!! Form::model($skills, ['method' => 'GET','route' => ['results.index']]) !!}
                    <input type="" name="search" class="form-control" placeholder="Search">
                    <strong>Expertise:</strong>
                    <select name="interests" id="interests" class="form-control">
                        <option value=""><--- Select Expertise ---></option>
                        @foreach ($skills as $skill)
                        <option value="{{ $skill->title }}" name="interests">{{ $skill->title }}</option>
                    @endforeach
                    </select>
                </br>
              
                    <button type="submit" class="btn btn-default btn-lg span"><span class="network-name">SEARCH</span></button>
                {!! Form::close()!!}
                </br>
                </br>
            
            <div class="row">
            @foreach($users as $user)
                <div class="col-sm-4" style="height: 470px;">
                    <div class="thumbnail">
                        

                        <div class="center" style="height: 450px">
                            <img src="/images/avatar/{{$user->profilepic}}" name="aboutme" width="200" height="200" border="0" class="img-circle" ahref="" class="col-sm-3">  
                        
                        <a href="{{route('profile.show', $user->id)}}" >                    
                        <h3 class="media-heading">{{$user->name}}</h3>
                        </a> 
                        <strong>Background: </strong>
                        <h4 class="network-name">{{$user->background}}</h4>
                        <strong>Expertise: </strong>
                        <p>{{$user->interests}}</p> 
                        
                        </div>
                    </div>
                </div>           
            @endforeach
                    
            </div>
                            
                

                <a href="/" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
            </div>
    </div>

</section>

@stop

