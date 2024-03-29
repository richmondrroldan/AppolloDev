@extends('layout')
@section('acontent')
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav network-name" href="/home">APPOLLO</a>
            </div>
           <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="/home"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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

<div id="page-wrapper" style="padding-top: 20px;">
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
    <th class="center">Name</th>
    <th class="center">E-mail</th>
    <th class="center">Contact Number</th>
    <th class="center">Topic of Workshop</th>
    <th class="center">Status</th>
    <th class="center">Action</th>
    </tr>
    @foreach($workshops as $workshop)
    <tr>
    <td>{{$workshop->name}}</td>
    <td>{{$workshop->email}}</td>
    <td>{{$workshop->contact}}</td>
    <td>{{$workshop->wType}}</td>
    <td>{{$workshop->status}}</td>
    <td><a class="btn btn-success" href="{{ route('aWorkshop.edit', $workshop->id) }}">Change Status</a></td>
    </tr>
    @endforeach
    </table>
    <div class="pull-right">
    <a class="btn btn-success" href="/home"> Back</a>
    </div>
</div>
</div>  


@stop
