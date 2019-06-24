@extends('master')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<form method="POST" action="{{ url('/tasks') }}">
				{{ csrf_field() }}
				<div class="form-group">
					<label>Task Name</label>
					<input type="text" name="name" class="form-control" />
				</div>
				<div class="form-group">
					<label>Task Description</label>
					<textarea name="description" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<a href="{{ url('/') }}" class="btn btn-warning">Back</a>
					<button type="submit" class="btn btn-primary">
						Create Task
					</button>
				</div>
			</form>
		</div>
	</div>
@stop