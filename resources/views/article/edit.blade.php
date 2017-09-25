@extends('layout')
@section('acontent')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('article.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($article, ['method' => 'PATCH','route' => ['article.update', $article->id]]) !!}
        <div class="form-group">
    <div class="cols-sm-10">
           <div class="form-group">
                    <strong>Name:</strong>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>
        </div>
        </div>
            <div class="form-group">
            <strong>Details:</strong>
            {!! Form::textarea('shortBio', null, array('placeholder' => 'Background','class' => 'form-control','style'=>'height:400px')) !!}
        </div>
            
        <button type="submit" class="btn btn-default btn-lg span"><span class="network-name">Submit</span></button>
        </br>
        </br>
        <a href="/articleC" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
    </div>


    {!! Form::close() !!}
@include('templates/footer')
@stop
