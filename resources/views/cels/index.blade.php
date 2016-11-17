@extends('layouts.app')
@section('bodyclass')
bmain2
@stop
@section('content')

  <div class="container-fluid white">
          @if (count($cels) > 0)
          @else
          <h3>Welcome {{ Auth::user()->name }} catalog your collection today.</h3>              
          @endif

 <div class="row">
      <div class="col-md-12 col-xs-12 space40" id="filters">
          <a href="{{ route('cels.create') }}" class="btn btn-add" role="button">+ADD</a>
          <a href="#" class="btn btn-custom" role="button" data-filter=".film">Sort: FILM</a>
          <a href="#" class="btn btn-custom2" role="button" data-filter=".tv">Sort: TV</a>
          <a href="#" class="btn btn-custom" role="button" data-filter="*">ALL</a>
      </div>
  </div>         
</div>

<div class="container-fluid">
  <div class="row isotope">
    @foreach ($cels as $cel)
        <div class="col-xs-4 col-md-3 item {{ $cel->categories}} nopadding">
             <img class="object-fit_cover"src="{{ asset('uploads/'.$cel->photo) }}" data-toggle="modal" id="" data-target="#show_cel_<?php echo $cel->id; ?>">
           </div>
   @endforeach
     </div>
</div>

@foreach ($cels as $cel)
<div class="modal fade" id="show_cel_<?php echo $cel->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <a href="#close" title="Close" class="close"  data-dismiss="modal">X</a>
  <div class="modal-dialog">
      <img src="{{ asset('img/holder.png') }}"alt="cel holder" class="img-responsive">
    <div class="modal-content text-center">
        <img src="{{ asset('uploads/'.$cel->photo) }}" class="img-responsive center-block">
      <div class="footer">
                     <p> 
                      <h1>{{ $cel->name }} <span class="smallerfont"> {{ $cel->categories}}</span></h1>
   
                    {{ $cel->description }}              
                    </p>
                    <div class="form-group nopadding">
                        <div class="btn-group btn-group-justified">
                            <div class="btn-group">
                                <a href="{{ route('cels.edit',[$cel->id]) }}" class="btn2 btn-block">Edit</a>
                            </div>
                    <div class="btn-group btn-group-justified">
                        {!! Form::open(array(
                                'method' => 'DELETE',
                                'onsubmit' => "return confirm('".trans("Are you sure?")."');",
                                'route' => ['cels.destroy', $cel->id])) !!}
                        {!! Form::submit('Delete', array('class' => 'btn3 btn-block')) !!}
                        {!! Form::close() !!}
                    </div>
                    </div>
           </div>
        </div>
      </div>
    </div>
</div>
@endforeach




@stop


