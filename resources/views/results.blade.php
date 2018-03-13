@extends('layout')
@include('templates/nav')
@section('content')

<section class="searchspan">
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
            
            @foreach($results as $result)
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <div class="center">
                            <a href="{{route('profile.show', $result->id)}}"><img src="/images/avatar/{{$result->profilepic}}" name="aboutme" width="200" height="200"  border="0" class="img-circle" ahref=""></a>
                            <h3 class="media-heading">{{$result->name}}</h3>
                            <span><strong>Skills: </strong></span>
                            <span class="label label-warning">{{$result->interests}}</span> 
                            
                            </div>
                        </div>
                    </div>
                    @endforeach
                

                <a href="/" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
            </div>
    </div>

</section>

@include('templates/footer')
@stop