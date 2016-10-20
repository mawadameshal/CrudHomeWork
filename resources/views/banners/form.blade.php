@extends('layout')
@section('content')
  @if(isset($object))
     {!! Form::model($object,['route' => ["$current_route.update", $object->id],'method' =>'PUT']) !!}

  @else
      {!! Form::open(['url' =>"$current_route", 'method' =>'post']) !!}

      @endif

      <div class="form-group">
      {!! Form::label('title' , 'Title')!!}
      {!! Form::text('title', null , ['class' =>'form-control']) !!}	
      </div>

      <div class="form-group">
      {!! Form::label('position' , 'Position')!!}
      {!! Form::select('position', ['top' =>'Top' , 'bottom' =>'Bottom'] , null ,['class' =>'form-control']) !!}	
      </div>

      <div class="form-group">
      {!! Form::label('status' , 'Status')!!}
      {!! Form::select('status', ['1' =>'Active' , '0' =>'Disable'] , null ,['class' =>'form-control']) !!}	
      </div>

      <div class="form-group">
      {!! Form::submit('Submit' , ['class'=>'btn btn-primary'])!!}	
      </div>

      {!! Form::close() !!}
      @stop

