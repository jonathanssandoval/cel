@extends('layouts.app')

@section('content')
   <a href="{{ url('cats') }}" class="btn btn-default">Back</a>

    <h1 class="page-title">Edit Cat</h1>
    
    {!! Form::model($cat, ['method' => 'PUT', 'route' => ['cats.update', $cat->id], 'files' => true,]) !!}

        

            <div class="row">
                <div class="col-xs-12 form-group">
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
                <div class="col-xs-12 form-group">
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
                <div class="col-xs-12 form-group">
                    {!! Form::label('description', 'Description', ['class' => 'control-label']) !!}
                    {!! Form::textarea('description', old('description'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('description'))
                        <p class="help-block">
                            {{ $errors->first('description') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('category_film', 'Color', ['class' => 'control-label']) !!}
                    {!! Form::radio('category_film', $enum_categories, old('color'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('categories'))
                        <p class="help-block">
                            {{ $errors->first('categories') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('active', 'Active', ['class' => 'control-label']) !!}
                    {!! Form::hidden('active', 0) !!}
                    {!! Form::checkbox('active', 1, $cat->active == 1, ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('active'))
                        <p class="help-block">
                            {{ $errors->first('active') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('weight', 'Weight', ['class' => 'control-label']) !!}
                    {!! Form::text('weight', old('weight'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('weight'))
                        <p class="help-block">
                            {{ $errors->first('weight') }}
                        </p>
                    @endif
                </div>
            </div>


            <div class="row">
            <div class="col-xs-12 form-group">
              <h4>Toys</h4>
              @foreach($toys as $toy)
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="toys[]" value="{!! $toy->id !!}"
                    @foreach($cat->toys as $selected_toy)
                      @if($toy->id == $selected_toy->id)
                          checked
                      @endif    
                    @endforeach
                  >{!! $toy->name !!}</label>
              </div>
              @endforeach
            </div> 
          </div> 

            
    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}


@stop

