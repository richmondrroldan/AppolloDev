@extends('layout')
@section('acontent')
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
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
                            <a href="/art"><i class="fa fa-edit fa-fw"></i> Articles</a>
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
<div class="container">
                <div class="">
                    <h3 class="center">Workshop Request</h3>
                    </br>
                    <form class="" method="POST" action="{{route('articleC.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Title</label>
                            <div class="cols-sm-10">
                                <div class="input-group span">
                                    <input type="text" class="form-control" name="title" id="title"  placeholder="Title"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Description</label>
                            <div class="cols-sm-10">
                                <div class="input-group span">
                                    <input type="text" class="form-control" name="description" id="description"  placeholder="Description"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <strong>Details:</strong>
                            {!! Form::textarea('article', null, array('placeholder' => 'Article','class' => 'form-control','style'=>'height:400px')) !!}
                        </div>
                          <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Image</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="file" class="form-control" name="image" id="image"/>
                                </div>
                            </div>
                        </div>
                        </br>
                        <button type="submit" class="btn btn-default btn-lg span"><span class="network-name">Submit</span></button>
                        </br>
                        </br>

                        <a href="/art" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
                        </br>
                        </br></br>
                        </br>
                                                
                    </form>
                </div>
            </div>

@include('templates/footer')
@stop
