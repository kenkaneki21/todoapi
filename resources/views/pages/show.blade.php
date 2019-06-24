@extends('master')
@section('content')
	<div class="row mt-5">
		<div class="col-md-12">
			<h3>{{ $task->name }}</h3>
			@if($task->status == 0)
				<strong>Pending</strong>
			@else
				<strong>Done</strong>
			@endif	
			<p style="background: #F4f4f4; padding: 20px; border: 1px solid #CCC;">
				{{ $task->description }}
			</p>
		</div>
	</div>
	
	<hr />
	<a href="{{ url('/') }}" class="btn btn-warning">Back</a>
	
	<a href="{{ url('tasks/'.$task->id.'/edit') }}" class="btn btn-primary">Edit</a>
	<br />
	<br />
	<br />
	<form action="{{ url('tasks/'.$task->id) }}" method="POST">
		@method('DELETE')
		{{ csrf_field() }}
		<button type="submit" class="btn btn-danger">
			Delete
		</button>
	</form>
@stop