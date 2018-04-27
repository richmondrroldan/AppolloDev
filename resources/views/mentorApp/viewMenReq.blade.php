@extends('layout')
@include('templates/nav')
@section('content')
{!! Form::model($mReq, ['method' => 'PATCH','route' => ['mApp.update', $mReq->id]]) !!}
<div class="container" style="padding-top: 50px;">
     @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="intro-header">
        <h2>Mentorship Approval</h2>
    </div>
    <div class="form-group">
        <div class="form-group">
            <strong>Name:</strong>
            {{$mReq->name}} 
        </div>
        <div class="form-group">
            <strong>E-Mail:</strong>
            {{$mReq->email}} 
        </div>
        <div class="form-group">
            <strong>Contact:</strong>
            {{$mReq->expertise}} 
        </div>
        <div class="form-group">
            <strong>Project:</strong>
            {{$mReq->project}} 
        </div>
        <div class="form-group">
            <strong>Status:</strong>
            <select name="status" id="status" class="form-control">
            <option value="{{$mReq->status}}">{{$mReq->status}}</option>
            <option value="Contacted">Contacted</option>
            <option value="In-Progress">In-Progress</option>
            <option value="Done">Done</option>
            </select>
        </div>
</div>    
    <button type="submit" class="btn btn-default btn-lg span"><span class="network-name">Submit</span></button>
    </br>
    </br>

{!! Form::Close( )!!}    
    <a type="button" class="btn btn-default btn-lg span" id="dtBtn" href="{{route('mApp.show', Auth::user()->id)}}"><span class="network-name">BACK</span></a>
</div>

@stop
