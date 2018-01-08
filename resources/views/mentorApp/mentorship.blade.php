@extends('layout')
@include('templates/nav')
@section('content')

<div class="col-lg-12 intro-message">
     <div class="intro-header">
        <h2>Mentorship Request</h2>
    </div>
    </br>
    <table class="table table-bordered center">
    <tr>
    <th class="center">Name</th>
    <th class="center">E-mail</th>
    <th class="center">Contact Number</th>
    <th class="center">Expertise Needed</th>
    <th class="center">Project Overview</th>
    <th class="center">Status</th>
    <th class="center">Action</th>
    </tr>
    @foreach($mReq as $mReq)
    <tr>
    <td>{{$mReq->name}}</td>
    <td>{{$mReq->email}}</td>
    <td>{{$mReq->contact}}</td>
    <td>{{$mReq->expertise}}</td>
    <td>{{$mReq->project}}</td>
    <td>{{$mReq->status}}</td>
    <td><a class="btn btn-success" href="{{route('mApp.edit', $mReq->id)}}">View Status</a></td>
    </tr>
    @endforeach
    </table>
    <div class="pull-right">
    <a class="btn btn-success" href="/home"> Back</a>
    </div>


@include('templates/footer')
@stop
