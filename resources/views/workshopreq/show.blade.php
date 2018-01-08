@extends('layout')
@include('templates/nav')
@section('content')


<div class="row" style="padding-top: 50px;">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
        @endif
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <h2>Workshop Request</h2>
        </div>
    </div>
    </br>
    <table class="table table-bordered center">
    <tr>
    <th class="center">Topic of Workshop</th>
    <th class="center">Status</th>
    </tr>
    @foreach($workshops as $workshop)

    <tr>
    <td>{{$workshop->wType}}</td>
    <td>{{$workshop->status}}</td>
    </tr>

    @endforeach
    </table>
     <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <h2>Mentorship Request</h2>
        </div>
    </div>
    </br>
    <table class="table table-bordered center">
    <tr>
    <th class="center">Expertise</th>
    <th class="center">Project</th>
    <th class="center">Status</th>
    </tr>
    @foreach($mReq as $mReq)

    <tr>
    <td>{{$mReq->expertise}}</td>
    <td>{{$mReq->project}}</td>
    <td>{{$mReq->status}}</td>
    </tr>

    @endforeach
    </table>
    <div class="pull-right">
    <a class="btn btn-success" href="/home"> Back</a>
    </div>
</div>

@include('templates/footer')
@stop
