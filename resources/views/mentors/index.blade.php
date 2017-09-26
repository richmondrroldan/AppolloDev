@extends('layout')
@section('acontent')

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/home">MagisAdmin</a>
    </div>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="/home"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>                        
                    <a href="/mentors"><i class="fa fa-user fa-fw"></i> Mentors</a>
                </li>
                <li>                        
                    <a href="/skills"><i class="fa fa-tasks fa-fw"></i> Skills</a>
                </li>
                <li>                        
                    <a href="/events"><i class="fa fa-calendar-o fa-fw"></i> Events</a>
                </li>
                <li>                        
                    <a href="{{route('articleC.index')}}"><i class="fa fa-edit fa-fw"></i> Articles</a>
                </li>
                <li>                        
                    <a href="/aWorkshop"><i class="fa fa-calendar-o fa-fw"></i> Workshop Request</a>
                </li>
                <li>                        
                    <a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>

            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
 <div id="page-wrapper">
        <div class="row" style="padding-top: 50px;">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Mentor Master List</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{route('mentors.create')}}">Create New Mentor</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Skill Title</th>
                    <th>Short Bio</th>
                    <th width="280px">Action</th>
                </tr>
        @foreach($mentors as $mentor)
            <tr>
                <td>{{$mentor->name}}</td>
                <td>{{$mentor->skills_title}}</td>
                <td>{{$mentor->shortBio}}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('mentors.edit', $mentor->id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['mentors.destroy', $mentor->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>

            </tr>
        @endforeach
            </table>
            <div class="pull-right">
                <a class="btn btn-success" href="/home"> Back</a>
            </div>
</div>

@include('templates/footer')
@stop
