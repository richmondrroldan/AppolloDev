@extends('layout')
@include('templates/nav')
@section('content')

<div class="intro-header">
    <div class="container" style="padding-top: 80px;">
        <div class="row">
                    <h3>What do you need?</h3>
                        
                            <div class="row">
                                
                                    <div class="form-group">
                                        
                                        {!! Form::model($skills, ['method' => 'GET','route' => ['results.index']]) !!}

                                        {!! Form::text('search', null, array('placeholder' => 'Search','class' => 'form-control')) !!}

                                        <strong>Expertise:</strong>
                                            <select name="interests" id="interests" class="form-control">
                                            <option value=""><--- Select Expertise ---></option>
                                            @foreach ($skills as $skill)
                                            <option value="{{ $skill->title }}" name="interests">{{ $skill->title }}</option>
                                            @endforeach
                                        </select>

                                        <button type="submit" class="btn btn-default btn-lg span"><span class="network-name">SEARCH</span></button>


                                        {!! Form::close()!!}

                                     </div>
                                @foreach($users as $user)
                <div class="col-md-4">
                    <div class="thumbnail">
                        <div class="center">
                        <a href="{{route('profile.show', $user->id)}}"><img src="/images/avatar/{{$user->profilepic}}" name="aboutme" width="200" height="200"  border="0" class="img-circle" ahref=""></a>
                        <h3 class="media-heading">{{$user->name}}</h3>
                        <span><strong>Skills: </strong></span>
                        <span class="label label-warning">{{$user->interests}}</span> 
                        <br>
                        </div>
                    </div>
                </div>
                @endforeach
                            
                        
                        </br>
                        </br>
                        </br>
                        
                        <a href="/" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div
@include('templates/footer')
@stop