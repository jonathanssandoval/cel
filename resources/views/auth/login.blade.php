@extends('layouts.app')
@section('bodyclass')
orange
@stop
@section('content') 
<div class="container" >
    <div class="row prow" >
        <div class="col-md-8 col-md-offset-2" >
            <div class="panel panel-default">
                <img src="{{ asset('img/holder.png') }}"alt="cel" class="img-responsive">
                <div class="panel-body" >
                   <h2 align="center">Login</h2>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}" >
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
                            <div class="col-md-6 col-md-offset-3">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-6 col-md-offset-3">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12" align="center">
                                <button type="submit" class="btn btn-primary btn-wide">
                                    Submit
                                </button>
                            </div>
                        
                        <div class="col-md-12" align="center">
                             <a class="" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                        </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
