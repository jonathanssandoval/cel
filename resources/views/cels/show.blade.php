@extends('layouts.app')
@section('bodyclass')
orange
@stop
@section('content')

    <a href="{{ url('cel') }}" class="btn btn-default">Back</a>

        <div class="well">
            <h1>{{ $cel->name }}</h1>
            <p>

                Photo: <br>    
                @if($cel->photo != '')
                    <img src="{{ asset('uploads/thumb/'.$cel->photo) }}">
                @endif

                Description:<br>  
                {{ $cel->description }}

                Active:<br>  
                {{ $cel->active == 1 ? 'Yes' : 'No' }


            </p>
        </div>

@stop