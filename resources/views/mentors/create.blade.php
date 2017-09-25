@extends('layout')
   @if (count($errors) > 0)
        <div class="alert alert-danger" style="padding-top: 50px">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($mentors, ['method' => 'POST','route' => ['mentors.update', $mentors->id]]) !!}
        @include('mentors.form')
    {!! Form::close() !!}
                </div>
            </div>

@include('templates/footer')

