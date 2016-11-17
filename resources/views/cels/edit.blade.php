@extends('layouts.app')
@section('bodyclass')
orange
@stop
@section('content')
 <a href="{{ url('cels') }}" class="btn btn-default">Back</a>

<div class="container">
    <div class="panel panel-primary">

        <h1 class="page-title" align="center">Edit Cel</h1>
    
    {!! Form::model($cel, ['method' => 'PUT', 'route' => ['cels.update', $cel->id], 'files' => true,]) !!}

        

            <div class="row">
                <div class="col-md-6 col-md-offset-3 form-group">
                    {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3 form-group">
                    {!! Form::label('photo', 'Photo', ['class' => 'control-label']) !!}
                    {!! Form::file('photo', old('photo'), ['class' => 'form-control']) !!}
                    {!! Form::hidden('photo_max_size', 10) !!}
                    {!! Form::hidden('photo_max_width', 2000) !!}
                    {!! Form::hidden('photo_max_height', 2000) !!}
                    <p class="help-block"></p>
                    @if($errors->has('photo'))
                        <p class="help-block">
                            {{ $errors->first('photo') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3 form-group">
                    {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
                    {!! Form::textarea('description', old('description'), ['class' => 'form-control ', 'placeholder' => '']) !!}

                <div class="col-xs-12"><label for= "category" class="control-label form-group"> Select a Category</label>
                 </div>
        



                <div class="col-xs-4 form-group">
                    {!! Form::label('categories', 'Film', ['class' => 'control-label']) !!}
                    {!! Form::radio('categories', 'film', false, ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('film'))
                        <p class="help-block">
                            {{ $errors->first('film') }}
                        </p>
                    @endif
                </div>


                <div class="col-xs-4 form-group">
                    {!! Form::label('categories', 'Tv', ['class' => 'control-label']) !!}
                    {!! Form::radio('categories', 'tv', false, ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tv'))
                        <p class="help-block">
                            {{ $errors->first('tv') }}
                        </p>
                    @endif
                </div>
             </div>
            </div>
            <p class="help-block"></p>
                    @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
        </div>

    </div>

    
@stop

