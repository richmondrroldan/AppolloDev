@extends('layout')
@include('templates/nav')
@section('content')

<div class="intro-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h3>What do you need?</h3>
                    <hr class="intro-divider">
                    <ul class="list-inline intro-social-buttons">
                        <li>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        
                                        {!! Form::model($skills, ['method' => 'GET','route' => ['results.index']]) !!}
<<<<<<< HEAD

=======
<<<<<<< HEAD
>>>>>>> login

                                        {!! Form::text('search', null, array('placeholder' => 'Search','class' => 'form-control')) !!}

                                        <strong>Expertise:</strong>
                                        <select name="skills_title" id="skills_title" class="form-control">
                                        <option value="">--- Select Expertise ---</option>
                                        @foreach ($skills as $skill)
                                        <option value="{{ $skill->title }}">{{ $skill->title }}</option>
                                        @endforeach
                                        </select>

<<<<<<< HEAD
=======
=======
                                        {!! Form::text('skill', null , array('placeholder' => 'Search','class' => 'form-control', 'required' => 'required')) !!}
>>>>>>> 1c73d7bc9c562d05d74ed7caf991ed22bb82721e
>>>>>>> login
                                        <button type="submit" class="btn btn-default btn-lg span"><span class="network-name">SEARCH</span></button>


                                        {!! Form::close()!!}

                                     </div>
                                </div>
                            </div>
                        </li>
                        </br>
                        </br>
                        </br>
                        <li>
                        <a href="training" class="btn btn-default btn-lg span"> <span class="network-name">Back</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div
@include('templates/footer')
@stop