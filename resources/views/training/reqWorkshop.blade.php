@extends('layout')
@include('templates/nav')
@section('content')

@if(Auth::guest())
@section('content')
@include('training/unRegistered')
@endsection
@else
<div style="padding-top: 70px;">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     <div class="container" style="padding-top: -20px;">
        <div class="">
            <h3 class="center">Workshop Request</h3>
            </br>
            <form class="" method="post" action="{{route('rWorkshop.store')}}">
             {{ csrf_field() }}
             <input type="hidden" value="{{Auth::user()->id}}" for="userID" name="userID" id="userID">
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
                    <label for="wType" class="cols-sm-2 control-label">Topic of Workshop</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="wType" id="wType"  placeholder="Topic of Workshop"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="why" class="cols-sm-2 control-label">Why?</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="textarea" class="form-control" name="why" id="why"  placeholder="Why?"/>
                        </div>
                    </div>
                </div>
                </br>
                    <button type="submit" class="btn btn-default btn-lg span"><span class="network-name">Submit</span></button>
                </br>
                </br>

                <a href="/" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
                                        
            </form>
        </div>
    </div>
</div>
@endif

@include('templates/footer')
@stop