@extends('layout')
@section('content')
<p><a href="{{url("$current_route/create")}}" class="btn btn-success">Create</a></p>

<table class="table table-responsive">
<tr>
	<td>ID</td>
	<td>TITLE</td>
	<td>POSITION</td>
	<td>STATUS</td>
	<td>ACTIONS</td>
</tr>

@foreach($objects as $object)
  <tr>
  	<td>{{ $object->id }}</td>
  	<td>{{ $object->title }}</td>
  	<td>{{ $object->position }}</td>
  	<td>{{ $object->status }}</td>
  	<td>
  		<a  class="btn btn-info" href="{{route('$current_route.edit',$object->id) }}">Edit</a>

  		{!! Form::open(['url' => route("$current_route.destroy" , $object->id) , 'method' =>'delete' ]) !!}
      <input type="submit" name="Delete" class="btn btn-warning">

  		{!! Form::close() !!}
  	</td>
  </tr>
  @endforeach
	
</table>
@stop