@extends('layouts.app')
@section('bodyclass')
bmain
@stop
@section('content')

<div class="container tbox">
	<h5>Catalog. Celebrate. Archive.<br><p class="light">your animation cel collection</p></h5>
	<a href="{{ url('register') }}" class="btn btn-lg">GET STARTED</a>
</div>
@stop