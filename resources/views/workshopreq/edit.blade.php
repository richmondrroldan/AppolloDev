@extends('layout')

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
{!! Form::model($aWorkshop, ['method' => 'PATCH','route' => ['aWorkshop.update', $aWorkshop->id]]) !!}
<div id="page-wrapper" style="padding-top: 10px;">
    <div class="form-group">
        <div class="cols-sm-10">
        
            <div class="form-group">
            <strong>Name:</strong>
                   {{$aWorkshop->name}} 
            </div>
            <div class="form-group">
            <strong>E-Mail:</strong>
                   {{$aWorkshop->email}} 
            </div>
            <div class="form-group">
            <strong>Contact:</strong>
                   {{$aWorkshop->contact}} 
            </div>
            <div class="form-group">
            <strong>Workshop Type:</strong>
                   {{$aWorkshop->wType}} 
            </div>
            <div class="form-group">
            <strong>Status:</strong>
                <select name="status" id="status" class="form-control">
                    <option value="">{{$aWorkshop->status}}</option>
                    <option value="Contacted">Contacted</option>
                    <option value="In-Progress">In-Progress</option>
                    <option value="Done">Done</option>
                </select>
            </div>
        </div>
        
    </div> 
    <button type="submit" class="btn btn-default btn-lg span"><span class="network-name">Submit</span></button>
    </br>
    {!! Form::Close( )!!}
        </br>
    <a href="/mentors" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
</div>





