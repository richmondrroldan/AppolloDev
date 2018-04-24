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
                <h2>Topic Master List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('skills.create')}}"> Create New Mentor</a>
            </div>
        </div>
    </div></br>
    <table class="table table-bordered center">
        <tr>
            <th class="center">Topics</th>
            <th class="center">Action</th>
        </tr>
    @foreach($skills as $skill)
    <tr>
        <td>{{$skill->title}}</td>

        <td>
            {!! Form::open(['method' => 'DELETE','route' => ['skills.destroy', $skill->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    <div class="pull-right">
        <a class="btn btn-success" href="/home"> Back</a>
    </div>

@stop
