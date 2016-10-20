@extends('layout')
@section('content')
<p><a href="{{url("$current_route/create")}}" class="btn btn-success"></a></p>

<table class="table table-responsive">
<tr>
	<td>ID</td>
	<td>NAME</td>
	<td>LOCALE</td>
	<td>CODE</td>
	<td>ACTIONS</td>
</tr>

@foreach($objects as $object)
  <tr>
  	<td>{{ $object->id }}</td>
  	<td>{{ $object->name }}</td>
  	<td>{{ $object->code }}</td>
  	<td>{{ $object->status }}</td>
  	<td>
  		<a  class="btn btn-info" href="{{route('$current_route.edit',$object->id) }}">Edit</a>

  		{!! Form::open(['url' => route("$current_route.destroy" , $object->id) , 'method' =>'delete' ]) !!}

  		{!! Form::close() !!}
  	</td>
  </tr>
  @endforeach
	
</table>
@stop