@extends('layout')
@include('templates/nav')
@section('content')

@if(Auth::guest())
@section('content')
@include('training/unRegMenReq')
@endsection
@else
<div style="padding-top: 70px;">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     <div class="container" style="padding-top: -20px;">
      
            <h3 class="center">Mentor Request</h3>
            </br>
            <form class="container" method="post" action="{{route('rMentor.store', $user->id)}}">
             {{ csrf_field() }}
             <input type="hidden" name="mentorID" id="mentorID" value="{{$user->id}}">
             <input type="hidden" name="userID" id="userID" value="{{Auth::user()->id}}">
                  <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="label" class="form-control" name="name" id="name"  value="{{Auth::user()->name}}"/>
                        </div>
                    </div>
                </div>

               <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="label" class="form-control" name="email" id="email"  value="{{Auth::user()->email}}"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="contact" class="cols-sm-2 control-label">Contact Number</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-mobile fa" aria-hidden="true"></i></span>
                            <input type="label" class="form-control" name="contact" id="contact"  placeholder="Enter your Contact Number"/>
                        </div>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="expertise" class="cols-sm-2 control-label">Expertise Needed:</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="expertise" id="expertise"  placeholder="Expertise Needed"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="project" class="cols-sm-2 control-label">Project Description:</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            {!! Form::textarea('project', null, array('placeholder' => 'Project Description','class' => 'form-control')) !!}
                            
                        </div>
                    </div>
                </div>
                <div class="form-group">
                </br>
                    <button type="submit" class="btn btn-default btn-lg span"><span class="network-name">Submit</span></button>
                </br>
                </br>
                    <a href="{{route('profile.show', $user->id)}}" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
                
                </div>                           
            </form>
        </br>
        </br>
        </br>
    </div>
</div>
@endif


@stop