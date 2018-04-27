@extends('layout')
@include('templates/nav')
@section('content')
<div class="container" style="padding-top: 50px;">
    <div class="col-lg-12">
         <div class="intro-header">
            <h2>Mentorship Request</h2>
        </div>
        </br>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Expertise</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($mReq as $mReq)
            <tr>
              <th scope="row">{{$mReq->name}}</th>
              <td>{{$mReq->expertise}}</td>
              <td>{{$mReq->status}}</td>
              <td><a class="btn btn-success" href="{{route('mApp.edit', $mReq->id)}}">View Project</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>

       
        <div class="pull-right">
            <a class="btn btn-success" href="/home"> Back</a>
        </div>
    </div>
</div>


@stop
